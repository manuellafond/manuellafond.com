#pragma once

#include <map>
#include <set>
#include <list>
#include <vector>
#include <iostream>

/*
Nom: Manuel Lafond

Complexité de get_tri: la complexité réelle est de O(nk^2), mais j'acceptais O(nk) car c'était subtil.
Je donne la version O(nk) et j'explique ensuite pourquoi c'est O(nk^2).

Justification: On remarque d'abord que le nombre de chemins racine-feuille dans l'arbre est n, puisque chaque chemin correspond 
à un élément inséré.  De plus, le nombre de noeuds sur un chemin est au plus k, par la définition de k.  Le nombre de noeuds est donc 
O(nk).  La fonction get_tri_rec effectue un parcours postordre de l'arbre, ce qui visite chaque noeud exactement une fois.
À chaque visite, on fait un possiblement push_back dans curcle.  On fait O(nk) tels push_back chacun en temps constant amorti, 
ce qui prend un temps total O(nk) pour la gestion de curcle.
Il y a aussi des push_back qui sont faits dans ret, le vecteur de retour.  Au total, on fait n push_back.  Chacun prend un temps O(k) amorti car 
en réalité, le tuple passé est copié dans le vecteur.  Les push_back dans ret prennent un temps total de O(nk).
Finalement, dans get_tri_rec, il y a une boucle qui itère sur les enfants.  Le nombre d'itérations faites, au total pendant toute l'éxécution, 
est égal au nombre de relations parent-enfant, ce qui est O(nk).  
Bref, chaque étape analysée prend un temps O(nk), et le temps total est donc O(nk).

Le truc qui manque dans cette analyse est que curcle est copié à chaque appel récursif.  Copier un TYPESDD standard prend un temps O(k).
Donc chaque appel à get_tri_rec prend en réalité un temps O(k), et la complexité devient donc O(nk^2).
Ceci est difficile à éviter.  On pourrait passer curcle par référence et ajouter/supprimer, mais ce n'est pas permis par tous les types.

*/

/*
On déclare ici deux type templatés.  TYPESDD réfère au conteneur servant à spécifier des tuples, par exemple 
TYPESDD = vector<int> ou encore TYPESDD = string.  
TYPE réfère au type d'objet dans les tuples.  Il est déterminé automatiquement avec la fonctionnalité C++ value_type, 
et n'a pas besoin d'être spécifié.  
Par exemple, si TYPESDD = vector<int>, alors TYPE = int.  Ou encore si TYPESDD = string, alors TYPE = char.
*/
template <typename TYPESDD, typename TYPE = typename TYPESDD::value_type>
class arbre_lexico{
private:

	/*
	Les deux lignes ci-bas déclarent les types pour les itérateurs du TYPESDD.
	Sans ça, il faudrait ajouter "typename TYPESDD::iterator" dans chaque fonction qui a besoin d'un itérateur.
	Le const_iterator est un itérateur constant, qui garantit de ne pas modifier la structure.  
	Il faut l'utiliser lorsque nous sommes dans des fonctions "const", ou lorsque des variables const sont impliquées.

	iterator (ou const_iterator) se comporte comme ce qu'on a vu en classe - on peut faire une boucle du style

	TYPESDD masdd;

	iterator it = masdd.begin();
	while (it != masdd.end()){
		...
		++it;
	}
	*/
	using iterator = typename TYPESDD::iterator;
	using const_iterator = typename TYPESDD::const_iterator;

	/*
	Vous pouvez ajouter des fonctions à cette struct -soit directement ici ou bien à l'extérieur de la définition de classe.
	*/
	struct noeud {
		TYPE val;		//valeur d'un objet de tuple
		std::map<TYPE, noeud*> enfants;		//clé = objet de tuple, valeur = noeud dont la val est cet objet
		bool est_fin;	//true si le noeud correspond à un chemin d'un tuple stocké

		noeud() {
			est_fin = false;
		}
	};

	noeud* racine;		//racine de l'arbre.  Devrait toujours exister, sauf`après la destruction

	size_t nbelem;		//nombre de tuples stockés

public:

	/**
     * À Ajouter vous-mêmes: fonctions standard de classe C++
	 * pour la construction, destruction, copie, ...
     */
	arbre_lexico();

	~arbre_lexico();


	/**
	 * Retourne true si cle est présente, false sinon
	 * @param cle La clé à rechercher
	 */
	bool contient(const TYPESDD& cle) const;


	/**
	 * Insère la clé dans la structure.  Si elle est déjà présente, ne rien faire.
	 * @param cle La clé à insérer
	 */
	void inserer(const TYPESDD& cle);
	
	/**
	 * Supprime une clé (en nettoyant la mémoire nécessaire).  Si la clé est absente, ne rien faire.
	 * @param cle La clé à supprimer
	 */
	void supprimer(const TYPESDD& cle);

	/**
	 * Retourne le nombre d'éléments stockés.
	 */
	size_t size();


	/**
	 * Supprime tous les éléments de façon EFFICACE, en nettoyant la mémoire nécessaire.
	 */
	void clear();


	/**
	 * Dessine l'arbre avec des std::cout.  La représentation ASCII est TRÈS rudimentaire, ne me jugez pas.
	 */
	void afficher_arbre();


	/**
	 * Retourne un vecteur contenant toutes les clés stockées en ordre trié.
	 */
	std::vector<TYPESDD> get_tri();

	
private:

	//Méthodes récursives utilisées pour chacune des fonctionnalités.
	//Vous pouvez en ajouter si vous voulez.

	void afficher_arbre_rec(noeud* cur, int niveau, std::set<int> niveaux_branches);

	bool supprimer_rec(const TYPESDD& cle, const_iterator& it, noeud* v);

	void get_tri_rec(std::vector<TYPESDD>& ret, noeud* v, TYPESDD curcle);

	void inserer_rec(const TYPESDD& cle, const_iterator& it, noeud* cur);

};



template <typename TYPESDD, typename TYPE>
arbre_lexico<TYPESDD, TYPE>::arbre_lexico() {
	racine = new noeud();
	racine->est_fin = false;
	nbelem = 0;
}

template <typename TYPESDD, typename TYPE>
arbre_lexico<TYPESDD, TYPE>::~arbre_lexico() {
	clear();

	delete racine;
}





template <typename TYPESDD, typename TYPE>
bool arbre_lexico<TYPESDD, TYPE>::contient(const TYPESDD& cle) const {
	if (!racine)
		return false;

	noeud* cur = racine;

	for (auto it = cle.begin(); it != cle.end(); ++it) {
		TYPE val = *it;

		auto it_map = cur->enfants.find(val);
		if (it_map == cur->enfants.end())
			return false;
		cur = it_map->second;
	}

	return cur->est_fin;
}







template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::inserer(const TYPESDD& cle) {
	if (contient(cle))
		return;

	nbelem++;

	auto it = cle.begin();
	inserer_rec(cle, it, racine);
}





template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::supprimer(const TYPESDD& cle) {
	if (!contient(cle))
		return;

	nbelem--;

	auto it = cle.begin();
	supprimer_rec(cle, it, racine);
}





template <typename TYPESDD, typename TYPE>
size_t arbre_lexico<TYPESDD, TYPE>::size() {
	return nbelem;
}


template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::clear() {

	std::list<noeud*> liste_a_supprimer;

	for (auto it : racine->enfants) {
		liste_a_supprimer.push_back(it.second);
	}

	while (!liste_a_supprimer.empty()) {
		noeud* v = liste_a_supprimer.front();
		liste_a_supprimer.pop_front();

		for (auto it : v->enfants) {
			liste_a_supprimer.push_back(it.second);
		}

		delete v;
	}
}


template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::afficher_arbre() {

	afficher_arbre_rec(racine, 10, {});
}



template <typename TYPESDD, typename TYPE>
std::vector<TYPESDD> arbre_lexico<TYPESDD, TYPE>::get_tri() {
	std::vector<TYPESDD> ret;
	TYPESDD curcle;
	get_tri_rec(ret, racine, curcle);
	return ret;
}





// MÉTHODES PRIVÉES

template <typename TYPESDD, typename TYPE>
bool arbre_lexico<TYPESDD, TYPE>::supprimer_rec(const TYPESDD& cle, const_iterator& it, noeud* v) {

	if (it == cle.end()) {
		v->est_fin = false;
		return (v->enfants.empty());
	}

	TYPE val = *it;
	auto it_enfant = v->enfants.find(val);
	if (it_enfant == v->enfants.end())
		return false;

	++it;

	noeud* enf = it_enfant->second;

	bool res = supprimer_rec(cle, it, enf);

	if (res) {
		delete enf;
		v->enfants.erase(val);
		return (v->enfants.empty() && !v->est_fin);
	}
	else {
		return false;
	}

}



template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::afficher_arbre_rec(noeud* cur, int niveau, std::set<int> niveaux_branches) {


	for (int i = 0; i < niveau; ++i) {
		std::cout << " ";
	}
	for (int i = niveau; i < niveau + 5; ++i) {
		std::cout << "-";
	}

	if (cur == racine)
		std::cout << "[R]";
	else
		std::cout << cur->val;

	if (cur->est_fin)
		std::cout << "*";

	std::cout << std::endl;

	niveau += 5;

	niveaux_branches.insert(niveau);

	//it_enfants->first = la clé de l'enfant, qui est la valeur
	//it_enfants->second = le noeud* associé à la valeur
	for (auto it_enfants = cur->enfants.begin(); it_enfants != cur->enfants.end(); ++it_enfants) {

		for (int i = 0; i <= niveau; ++i) {
			if (niveaux_branches.count(i))
				std::cout << "|";
			else
				std::cout << " ";
		}
		std::cout << std::endl;

		if (it_enfants == std::prev(cur->enfants.end())) {
			niveaux_branches.erase(niveau);
		}

		afficher_arbre_rec(it_enfants->second, niveau, niveaux_branches);

	}
}



template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::get_tri_rec(std::vector<TYPESDD>& ret, noeud* v, TYPESDD curcle) {

	if (v != racine)
		curcle.push_back(v->val);

	if (v->est_fin) {
		ret.push_back(curcle);
	}

	for (auto it : v->enfants) {
		get_tri_rec(ret, it.second, curcle);
	}
}



template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::inserer_rec(const TYPESDD& cle, const_iterator& it, noeud* cur) {
	if (it == cle.end()) {
		cur->est_fin = true;
		return;
	}

	TYPE val = *it;
	++it;

	auto it_map = cur->enfants.find(val);
	if (it_map == cur->enfants.end()) {
		noeud* v = new noeud();
		v->val = val;
		cur->enfants[val] = v;
		inserer_rec(cle, it, v);
	}
	else {
		inserer_rec(cle, it, it_map->second);
	}
}



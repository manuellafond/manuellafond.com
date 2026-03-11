#pragma once

#include <map>
#include <set>
#include <list>
#include <vector>
#include <iostream>



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
	//...


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


};


/**
Ajoutez vos nouvelles méthodes (construction, destruction, copie), au besoin
**/




template <typename TYPESDD, typename TYPE>
bool arbre_lexico<TYPESDD, TYPE>::contient(const TYPESDD& cle) const {
	//implémentez-moi
}







template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::inserer(const TYPESDD& cle) {
	//implémentez-moi
}





template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::supprimer(const TYPESDD& cle) {
	//implémentez-moi
}





template <typename TYPESDD, typename TYPE>
size_t arbre_lexico<TYPESDD, TYPE>::size() {
	//implémentez-moi
}


template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::clear() {
	//implémentez-moi
}






template <typename TYPESDD, typename TYPE>
std::vector<TYPESDD> arbre_lexico<TYPESDD, TYPE>::get_tri() {
	//implémentez-moi
}






template <typename TYPESDD, typename TYPE>
void arbre_lexico<TYPESDD, TYPE>::afficher_arbre() {

	afficher_arbre_rec(racine, 10, {});
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



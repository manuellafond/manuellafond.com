/*
Partie 1: éléments de correction à regarder.


Notation: n = nombre d'éléments stockés, m = max_taille

Bien sûr, la mauvaise gestion de mémoire est à pénaliser sévèrement.

Instructions de correction pour les fonctions.

~listchain(): éviter la duplication de code avec le clear

listchain(const listchain& source): éviter la duplication de code avec operator= 

operator=: il n'est pas obligatoire de recopier la même structure, avec les mêmes nbelem par supernoeud.  L'important est de:
nettoyer avant de recopier (appeler clear)
recopier les n valeurs de src (surtout pas recopier les pointeurs).  Je passe par push_back, mais ce n'était pas obligatoire, tant qu'il n'y 
a pas de dupli de code.

size(): doit prendre un temps O(n/m) en itérant les supernoeuds.  Il ne faut pas ajouter de variable membre, c'était dans les consignes.

clear(): doit correctement faire tous les delete nécessaires 

pop_front, push_front, push_back: doivent fonctionner correctement en temps O(1)
pop_back: doit fonctionner correctement en temps O(m)


Réponses aux questions de la partie 2
Les temps pour les fonctions sont comme suit:
push_front: O(1) car il suffit de créer un noeud et possiblement un supernoeud, puis d'ajuster quelques pointeurs
pop_front: O(1) car il suffit de supprimer un noeud et possiblement un supernoeud, puis d'ajuster quelques pointeurs
pop_back: O(m) car dans le pire cas, il faut trouver l'avant-dernier et le dernier noeud du supernoeud fin.  L'accès au supernoeud fin est en temps constant, mais on doit passer à travers une liste simplement chaînée avec O(m) éléments.
push_back: O(1) car il suffit d'ajouter un noeud après fin->dernier_noeud et ajuster des pointeurs, ou bien créer un nouveau supernoeud.  Dans les deux cas c'est temps constant.
size(): O(n/m), car on a une boucle qui itère la super liste, ce qui lui permet de sauter par-dessus des blocs de m éléments à la fois.  
Il y a n éléments et donc n/m blocs de m éléments, d'où la complexité.
operator[ ]: O(n/m + m), car on doit parcourir jusqu'à O(n/m) supernoeuds pour trouver le bon, puis parcourir jusqu'à m noeuds pour trouver l'index demandé.
Notez toutefois que si n < m, ceci est O(n).  Une façon ultra-précise d'énoncer la complexité en incluant les deux cas n > m et n < m devient donc O(n/m + min(n, m)), mais ce n'était pas demandé.


 */


#ifndef TP3_LISTCHAIN_H
#define TP3_LISTCHAIN_H


#include <iostream>


 /**
  * Classe pour une structure de données de liste chaînée de listes chaînées.
  */
template <typename TYPE>
class listchain
{
private:

    //Représente un noeud conteneur d'éléments
    struct noeud {
        TYPE val;
        noeud* next;

        noeud() {
            next = nullptr;
        }
    };

    //Représente une chaîne de noeuds.
    struct supernoeud
    {
        noeud* premier_noeud;
        noeud* dernier_noeud;

        supernoeud* prev;
        supernoeud* next;
        size_t nbelem;      //nombre d'éléments dans la chaîne du super noeud

        supernoeud() {
            premier_noeud = dernier_noeud = nullptr;
            prev = next = nullptr;
            nbelem = 0;
        }
    };

    supernoeud* debut;   //premier super noeud, ou nullptr si vide
    supernoeud* fin;     //dernier super noeud, ou nullptr si vide
    size_t max_taille;   //nombre d'élément maximum qu'un super noeud peut contenir

public:

    listchain() : listchain(10) {};	//redirige vers l'autre constructeur avec max_taille = 10

    listchain(size_t max_taille_supernoeud);

    ~listchain();

    listchain(const listchain& source);

    listchain& operator=(const listchain& source);


    TYPE& operator[](size_t i);

    size_t size() const;

    void push_front(const TYPE& val);
    void push_back(const TYPE& val);
    void pop_front();
    void pop_back();


    //*** J'ai pensé demander le insert_at et le erase_at, mais concentrez-vous sur l'intra à la place
    //*** Vous pouvez quand même réfléchir à comment vous l'auriez implémenté
    //void erase_at(const size_t pos);
    //void insert_at(const size_t pos, const TYPE& val);

    void clear();	//remet la liste vide


    void afficher_contenu();    //Affiche le contenu avec une ligne par sous-tableau.  

};





/*------------------------------------------------------------------------------
IMPLÉMENTATION
------------------------------------------------------------------------------*/





/**
 * Constructeur qui initialise avec une liste vide.
 * tabsize est la taille des sous-tableaux
 */
template <typename TYPE>
listchain<TYPE>::listchain(size_t max_taille_supernoeud)
{
    //implémentez-moi

    debut = fin = nullptr;
    max_taille = max_taille_supernoeud;

}




/**
 * Destructeur qui désalloue toute la mémoire et nettoie
 */
template <typename TYPE>
listchain<TYPE>::~listchain()
{
    //implémentez-moi

    clear();
}







/**
 * Supprime tous les éléments et remet à l'état d'une liste vide.
 */
template <typename TYPE>
void listchain<TYPE>::clear()
{
    //implémentez-moi

    if (!debut)
        return;

    supernoeud* sn = debut;
    while (sn) {
        noeud* v = sn->premier_noeud;
        while (v) {
            noeud* tmp = v->next;
            delete v;
            v = tmp;
        }
        supernoeud* tmpsn = sn->next;
        delete sn;
        sn = tmpsn;
    }

    debut = fin = nullptr;
}


/**
 * Constructeur par copie: met la liste à vide et délègue tout à l'opérateur =
 */
template <typename TYPE>
listchain<TYPE>::listchain(const listchain& source)
{
    //implémentez-moi

    debut = fin = nullptr;
    (*this) = source;
}


/**
 * Opérateur =
 * Nettoie l'objet courant et copie tout de la source
 */
template <typename TYPE>
listchain<TYPE>& listchain<TYPE>::operator=(const listchain& src)
{
    //implémentez-moi
    //NOTE: puisque vous n'avez pas à recopier exactement les mêmes super noeuds 
    //Il faut juste que le contenu soit le même, mais pas nécessairement les nbelem des super noeuds

    if (this == &src)
        return *this;

    clear();

    this->max_taille = src.max_taille;

    //ceci fait un push_back avec chaque élément de src
    supernoeud* sn = src.debut;
    while (sn) {
        noeud* v = sn->premier_noeud;
        while (v) {
            this->push_back(v->val);
            v = v->next;
        }
        sn = sn->next;
    }

}



/**
 * Retourne le i-ème élément.
 */
template <typename TYPE>
TYPE& listchain<TYPE>::operator[](size_t i)
{
    //implémentez-moi
    //aucune vérification de borne à faire

    size_t cpt = 0;

    supernoeud* sn = this->debut;
    bool fini = false;
    while (!fini) {
        if (cpt + sn->nbelem > i || !sn)
            fini = true;
        else {
            cpt += sn->nbelem;
            sn = sn->next;
        }
    }


    size_t offset = i - cpt;

    noeud* v = sn->premier_noeud;

    for (size_t j = 0; j < offset; ++j) {
        v = v->next;
    }
    return v->val;

}



/**
 * Retourne le nombre d'éléments dans votre liste.
 */
template <typename TYPE>
size_t listchain<TYPE>::size() const
{
    //implémentez moi

    size_t cpt = 0;
    supernoeud* sn = this->debut;
    while (sn) {
        cpt += sn->nbelem;
        sn = sn->next;
    }
    return cpt;
}



/**
 * Ajouter en début de liste.  Insérer une nouvelle cellule au début si nécessaire.
 */
template <typename TYPE>
void listchain<TYPE>::push_front(const TYPE& val)
{
    //implémentez moi
    //si debut->nbelem < max_taille, ajoutez dans la chaîne debut
    //sinon, créez un nouveau super noeud au début, avec un seul élément
    //N'oubliez pas de maintenir les nbelem

    noeud* v = new noeud();
    v->val = val;

    if (debut && debut->nbelem < max_taille) {
        noeud* tmp = debut->premier_noeud;
        debut->premier_noeud = v;
        v->next = tmp;
        debut->nbelem++;
    }
    else {
        supernoeud* sn = new supernoeud();
        sn->premier_noeud = sn->dernier_noeud = v;
        sn->nbelem = 1;

        if (!debut)
            debut = fin = sn;
        else {
            supernoeud* tmpsn = debut;
            debut = sn;
            debut->next = tmpsn;
            tmpsn->prev = sn;
        }
    }
}

/**
 * Ajouter en fin de liste.  Ajouter une nouvelle cellule à la fin si nécessaire.
 */
template <typename TYPE>
void listchain<TYPE>::push_back(const TYPE& val)
{
    //implémentez-moi
    //il y a 2 cas à gérer: si la liste est vide ou si fin->nbelem == max_taille,
    //il faut créer un nouveau super noeud pour v. 
    //Sinon, il faut juste ajouter à la fin du dernier super noeud.
    //N'oubliez pas de maintenir les nbelem

    noeud* v = new noeud();
    v->val = val;

    //cas où il faut créer un nouveau super noeud pour v
    if (!fin || fin->nbelem == max_taille) {
        supernoeud* sn = new supernoeud();
        sn->premier_noeud = sn->dernier_noeud = v;
        sn->nbelem = 1;

        if (!fin)
            debut = fin = sn;
        else {
            supernoeud* tmp_fin = fin;
            fin = sn;
            sn->prev = tmp_fin;
            tmp_fin->next = sn;
        }
    }
    //cas où on ajoute v au dernier super noeud
    else {
        noeud* tmp_dernier = fin->dernier_noeud;
        fin->dernier_noeud = v;
        tmp_dernier->next = v;
        fin->nbelem++;
    }
}










/**
 * Enlève l'élément en tête de liste.  Ne vérifie rien.
 */
template <typename TYPE>
void listchain<TYPE>::pop_front()
{
    //implémentez-moi

    if (!debut)
        return;

    if (debut->nbelem == 1) {
        delete debut->premier_noeud;

        supernoeud* debutnext = debut->next;
        delete debut;
        debut = debutnext;

        if (!debut)
            fin = nullptr;
        else
            debut->prev = nullptr;
    }
    else {
        noeud* tmp = debut->premier_noeud->next;
        delete debut->premier_noeud;
        debut->premier_noeud = tmp;
        debut->nbelem--;
    }
}


/**
 * Enlève l'élément en fin de liste.  Ne vérifie rien.
 */
template <typename TYPE>
void listchain<TYPE>::pop_back()
{
    if (!fin)   //liste vide
        return;

    //cas où le dernier super noeud a un seul element -> il va disparaître
    if (fin->nbelem == 1) {
        delete fin->premier_noeud;

        supernoeud* finprev = fin->prev;
        delete fin;
        fin = finprev;


        if (!finprev)   //cas où on vient de supprimer le dernier super noeud
            debut = nullptr;
        else
            fin->next = nullptr;
    }
    //cas où on doit supprimer le dernier elt de fin.  On est obligé de boucler pour aller chercher l'avant-dernier
    else {
        noeud* v_prev = fin->premier_noeud;
        noeud* v = fin->premier_noeud->next;

        while (v->next) {
            v_prev = v;
            v = v->next;
        }
        delete v;
        v_prev->next = nullptr;

        fin->nbelem--;
    }

}


/**
 * Affiche le contenu avec une ligne par sous-tableau.  Un X veut dire "case non-utilisée"
 */
template <typename TYPE>
void listchain<TYPE>::afficher_contenu()
{
    std::cout << "-------------------------------------" << std::endl;
    std::cout << "size() = " << size() << std::endl;

    supernoeud* sn = debut;
    while (sn) {

        std::cout << "[" << sn->nbelem << "] ";
        noeud* v = sn->premier_noeud;
        while (v) {
            std::cout << v->val << " ";
            v = v->next;
        }
        std::cout << std::endl;

        sn = sn->next;
    }

}



#endif //TP3_LISTCHAIN_H

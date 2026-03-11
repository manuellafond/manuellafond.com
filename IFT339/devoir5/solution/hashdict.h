#ifndef HASHDICT_H
#define HASHDICT_H


/*
Appliquer une pénalité (4-5 points) s'il y a beaucoup de code répété, en particulier pour 
la recherche d'une alvéole contenant une clé.  
Je tolère de la répétition pour le nettoyage, comme dans l'operator=.

Appliquer une pénalité sévère pour fuites de mémoire grave (8-10 points).  
Il est important que lors d'un nettoyage, les alvéoles soient supprimées individuellement.
Il arrive souvent que le pointeur bidon est le seul qui est mal géré, je serais moins sévère si 
c'est seulement ça.

Il n'y avait pas de contrainte sur la capacité initiale dans le constructeur, tant que ça fonctionne.

Le set_cap peut appeler inserer pour chaque élément, ça ne change pas la complexité.

Pour la partie 2, si on ne compte pas le temps pour trier, l'idéal est d'avoir un temps linéaire
O(n).  Avec le tri ça devient O(n + n log n) = O(n).
Une solution linéaire en m et n est aussi acceptable O(n + m +  k) (sans compter le tri).
Si c'est plus que ça, par exemple O(nm), enlever 10-15 points car ça passe à côté de l'objectif.

Note pour la partie 2, les nombres obtenus en sortie dépendent de la machine.


*/



template <typename TYPECLE, typename TYPEVAL>
class hashdict {
private:

    struct alveole {
        TYPECLE cle;
        TYPEVAL val;

        alveole() {}

        alveole(const TYPECLE& cle, const TYPEVAL& val) {
            this->cle = cle;
            this->val = val;
        }
    };

    /*
     * table est un tableau de pointeurs d'alvéoles.  Il y a 3 cas pour un élément table[i]:
     * Si table[i] == nullptr, alors l'alvéole i est inutilisée.
     * Si table[i] == bidon, alors l'alvéole ne contient rien et est libre pour insertion, mais il y a déjà eu un élément qui a été supprimé.
     * Sinon, table[i] contient un élément utilisateur.
     */
    alveole** table;



    alveole* bidon;     //alvéole bidon, réutilisable à plusieurs endroits

    size_t cap;         //capacité de table
    size_t nbelem;      //nombre d'éléments utilisateur dans table


    /*
    Vous pouvez ajouter des fonctions privées, au besoin, mais pas de nouvelles variable.
    */

    /**
     * Retourne la position de l'alvéole qui contient cle.  Si elle n'existe pas:
     *   - si arretSurBidon == false, retourne la première position qui contient nullptr après l'alvéole de la clé.
     *   - si arretSurBidon == true, retourne la première position qui contient nullptr OU bidon après l'alvéole de la clé.
     */
    size_t get_position_cle(const TYPECLE& cle, bool arretSurBidon = false) const;


    /*
    Réaffecte la capacité à c, en supprimant et recréant toute la table
    */
    void set_cap(size_t c);


public:

    hashdict();

    hashdict(const hashdict& src);

    hashdict& operator=(const hashdict& src);

    ~hashdict();

    /*
     * Supprime tous les éléments et met la capacité à une valeur par défaut
     */
    void clear();

    /*
     * Insère la clé et l'associe à val.  Retourne true s'il y a eu insertion, ou false si la clé était déjà présente
     */
    bool inserer(const TYPECLE& cle, const TYPEVAL& val);

    /*
     * Retourne true si la clé est présente, et false sinon
     */
    bool contient_cle(const TYPECLE& cle) const;

    /*
     * Supprime la clé.
     */
    bool supprimer(const TYPECLE& cle);

    /*
     * Retourne une référence vers la valeur associée à cle.  Si la clé est absente, elle sera d'abord insérée et associée
     * à une valeur créée par le constructeur par défaut.
     */
    TYPEVAL& operator[](const TYPECLE& cle);


    /*
     * Retourne le nombre d'éléments
     */
    size_t size();

};








template <typename TYPECLE, typename TYPEVAL>
hashdict<TYPECLE, TYPEVAL>::hashdict() {
    table = nullptr;
    bidon = new alveole();  //devrait toujours exister, supprimer à la destruction seulement
    cap = 0;
    set_cap(100);
    nbelem = 0;
}



template <typename TYPECLE, typename TYPEVAL>
hashdict<TYPECLE, TYPEVAL>::~hashdict() {
    clear();
    delete bidon;
}



template <typename TYPECLE, typename TYPEVAL>
hashdict<TYPECLE, TYPEVAL>::hashdict(const hashdict& src) {
    
    table = nullptr;
    bidon = new alveole();	//une alvéole arbitraire qui servira de bidon

    *this = src;
}


template <typename TYPECLE, typename TYPEVAL>
hashdict<TYPECLE, TYPEVAL>& hashdict<TYPECLE, TYPEVAL>::operator=(const hashdict& src) {

    
    if (this == &src)
        return *this;

    if (table) {
        //exceptionnellement, si vous avez à répéter ce bout de code de nettoyage, ce sera toléré
        for (int i = 0; i < cap; ++i)
            delete table[i];
        delete[] table;
    }


    cap = src.cap;
    nbelem = src.nbelem;

    table = new alveole * [src.cap];	//créé un tableau de pointeurs
    for (size_t i = 0; i < src.cap; i++) {
        if (src.table[i] == src.bidon)
            table[i] = bidon;
        else if (src.table[i]) {
            alveole* alv = new alveole(src.table[i]->cle, src.table[i]->val);
            table[i] = alv;
        }
        else
            table[i] = nullptr;
    }

    return *this;
}






template <typename TYPECLE, typename TYPEVAL>
void hashdict<TYPECLE, TYPEVAL>::clear() {
    //ne supprimez pas bidon!
    if (table) {
        for (size_t i = 0; i < cap; i++) {
            if (table[i] && table[i] != bidon)
                delete table[i];
        }
        delete[] table;
    }

    table = nullptr;
    nbelem = 0;
    cap = 0;
}








template <typename TYPECLE, typename TYPEVAL>
void hashdict<TYPECLE, TYPEVAL>::set_cap(size_t c) {
    //on suppose que c > 0
    //vous devez créer une nouvelle table ici.  Initialiser d'abord ses valeurs à nullptr,
    //puis ajoutez-y les valeurs de la table courante.
    //Normalement, on ne ferait que déplacer les alvéoles puisque ce sont des pointeurs.
    //Mais je vous permet d'appeler insert sur chaque ancien élément et ainsi de recréer chaque alvéole
    alveole** vieilleTable = table;
    size_t vieille_cap = cap;

    cap = c;
    table = new alveole * [cap];

    for (size_t i = 0; i < cap; i++)
        table[i] = nullptr;

    if (vieilleTable) {
        //copier elts et nettoyer
        for (size_t i = 0; i < vieille_cap; i++) {
            if (vieilleTable[i] && vieilleTable[i] != bidon) {
                inserer(vieilleTable[i]->cle, vieilleTable[i]->val);

                delete vieilleTable[i];
            }
        }
        delete[] vieilleTable;
    }

}




template <typename TYPECLE, typename TYPEVAL>
bool hashdict<TYPECLE, TYPEVAL>::inserer(const TYPECLE& cle, const TYPEVAL& val) {
    if (contient_cle(cle))
        return false;

    if ((float)nbelem / (float)cap >= 0.5f) {
        set_cap(cap * 2);
    }

    size_t h = get_position_cle(cle, true);

    //table[h] contient soit bidon, ou bien nullptr
    //on peut juste réaffecter l'alvéole

    table[h] = new alveole(cle, val);

    nbelem++;

    return true;
}


template <typename TYPECLE, typename TYPEVAL>
TYPEVAL& hashdict<TYPECLE, TYPEVAL>::operator[](const TYPECLE& cle) {
    size_t h = get_position_cle(cle);

    if (!table[h]) {
        TYPEVAL val;
        table[h] = new alveole(cle, val);
        return table[h]->val;
    }
    else {
        return table[h]->val;
    }
}


template <typename TYPECLE, typename TYPEVAL>
bool hashdict<TYPECLE, TYPEVAL>::contient_cle(const TYPECLE& cle) const {
    size_t h = get_position_cle(cle);

    return (table[h] != nullptr);
}


template <typename TYPECLE, typename TYPEVAL>
size_t hashdict<TYPECLE, TYPEVAL>::get_position_cle(const TYPECLE& cle, bool arretSurBidon) const {
    size_t hcur = (std::hash<TYPECLE>()(cle) % cap);

    bool ok = false;

    while (!ok) {
        if (table[hcur] && table[hcur]->cle == cle)
            ok = true;
        else if (table[hcur] == bidon && arretSurBidon)
            ok = true;
        else if (table[hcur]) {   //il y a quelque chose
            hcur = (hcur + 1) % cap;
        }
        else {    // !table[hcur]
            ok = true;
        }
    }

    return hcur;
}


template <typename TYPECLE, typename TYPEVAL>
bool hashdict<TYPECLE, TYPEVAL>::supprimer(const TYPECLE& cle) {
    //n'oubliez pas votre delete!
    if (!contient_cle(cle))
        return false;

    size_t h = get_position_cle(cle);

    delete table[h];

    table[h] = bidon;

    nbelem--;

    return true;
}









#endif // HASHDICT_H

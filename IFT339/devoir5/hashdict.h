#ifndef HASHDICT_H
#define HASHDICT_H



/*
Implémentation d'un dictionnaire avec une table de hachage.
On peut supposer que TYPECLE est hachable.  Ceci veut dire que vous pouvez transformer une clé 
en une adresse entre 0 et MAX_INT avec le code 
std::hash<TYPECLE>()(cle)
*/
template <typename TYPECLE, typename TYPEVAL>
class hashdict{
private:

    struct alveole{
        TYPECLE cle;
        TYPEVAL val;

        alveole(){}    

        alveole(const TYPECLE& cle, const TYPEVAL& val){
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

public:

    hashdict();

    /*
     * Ajoutez les fonctions nécessaires au bon fonctionnement d'une classe
     */

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
    size_t size() {
        return nbelem;
    }

};



//à vous d'ajouter le code d'implémentation de vos fonctions de classe
//vous êtes maintenant des experts et expertes, vous pouvez le faire vous-mêmes :)






#endif // HASHDICT_H

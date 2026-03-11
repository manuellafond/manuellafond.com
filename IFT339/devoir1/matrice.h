#ifndef MATRICE_H
#define MATRICE_H


#include <stddef.h> //pour size_t
#include <iostream>
#include <vector>

using namespace std;

/**
 * Représentation d'une matrice à l'iade d'un pointeur de pointeurs
 * @tparam TYPE Type d'objet à stocker
 */
template <typename TYPE>
class Matrice
{
private:
    TYPE** tab;
    size_t nb_rangees;
    size_t nb_colonnes;



public:

    /**
     * Constructeur qui reçoit le nombre de rangées et de colonne.  La matrice construite doit contenir n * m cellules,
     * chacune contenant une valeur de type TYPE non-initialisée.
     * @param n Nombre de rangées
     * @param m Nombre de colonnes
     */
    Matrice(size_t n, size_t m);






    /**
     * Constructeur qui reçoit le nombre de rangées et de colonne, en plus des valeurs des cellules sous la forme d'un vector.
     * Les m premières entrées du vecteur sont les entrées de la rangée 1, les m entrées suivantes les entrées de la rangée 2, et ainsi de suite.
     * @param n Nombre de rangées
     * @param m Nombre de colonnes
     * @param v Contenu de la matrice
     */
    Matrice(size_t n, size_t m, vector<TYPE> v);







    /**
     * Constructeur par copie.  La matrice construite aura les même dimensions que src, et le contenu de chaque cellule
     * de src est copié dans les cellules correspondantes.
     * @param src Matrice à copier.
     */
    Matrice(const Matrice& src);






    /**
     * Destructeur.
     */
    ~Matrice();


    /**
     * Surcharge de l'affectation.  Après l'exécution, la matrice courante devient une copie de src.  Les éléments stockés
     * dans l'objet courant avant la copie disparaissent.
     * @param src Matrice à assigner.
     * @return Référence vers la matrice courante.
     */
    Matrice& operator=(const Matrice& src);








    




    /**
     * Retourne une référence vers l'objet à la rangée r et à la colonne c.  Aucune vérification n'est faite sur les bornes de r et c, 
     * c'est à l'appelant de s'assurer que r et c sont dans les dimensions de la matrice.
     * Puisqu'une référence est retournée, modifier l'objet retourné doit aussi modifier l'objet de la matrice.
     * Par exemple, si m est une instance de Matrice<int>,
     * ma_matrice(2, 3) = 10;
     * place la valeur 10 à la troisième rangée, quatrième colonne.
     * @param r Indice de rangée
     * @param c Indice de colonne
     * @return Référence sur l'objet à la rangée r, colonne c
     */
    TYPE& operator()(size_t r, size_t c);




    /**
     * Fait la même chose que l'opérateur (r, c), mais vérifie dans r et c sont dans les bornes de la matrice.
     * Si l'entrée à la rangée r et colonne c n'existe pas, une exception est lancée (via throw Exception("message");)
     * @param r Indice de rangée
     * @param c Indice de colonne
     * @return Référence sur l'objet à la rangée r, colonne c
     */
    TYPE& at(size_t r, size_t c);







    /**
     * Affecte une nouvelle dimension à la matrice. Les éléments de la matrice actuelle (avant redimension) qui peuvent être 
     * conservés doivent être conservés.  Donc, s'il y présentement un élément à la rangée i, colonne j, tel que i < n et j < m, 
     * cet élément doit toujours être présent après redimensionnement, aux même positions.  Si i >= n ou i >= m, alors l'élément disparait.
     *
     * @param n Nouveau nombre de rangées
     * @param m Nouveau nombre de colonnes
     */
    void redimensionner(size_t n, size_t m);



    /**
     * Retourne les dimensions de la matrice
     * @return Une paire p telle que p.first = nombre de rangées, et p.second = nombre de colonnes
     */
    pair<size_t, size_t> get_dimensions() const;




    /**
     * Échange le contenu de la rangée r1 avec le contenu de la rangée r2
     * @param r1 Indice de la première rangée
     * @param r2 Indice de la deuxième rangée
     */
    void swap_rangees(size_t r1, size_t r2);

    /**
     * Échange le contenu de la colonne c1 avec le contenu de la colonne c2
     * @param c1 Indice de la première colonne
     * @param c2 Indice de la deuxième colonne
     */
    void swap_colonnes(size_t c1, size_t c2);


    /**
     * Affiche de contenu de la matrice sur la sortie standard via cout.  Pour débogage.
     */
    void afficher();

};




//////////////////////////////////////////////////////////////////////////////////////////
// IMPLÉMENTATION
//////////////////////////////////////////////////////////////////////////////////////////
template <typename TYPE>
Matrice<TYPE>::Matrice(size_t n, size_t m)
{
    tab = nullptr;
    nb_rangees = 0;
    nb_colonnes = 0;

    redimensionner(n, m);
}



template <typename TYPE>
Matrice<TYPE>::Matrice(size_t n, size_t m, vector<TYPE> v)
{
    // *** à remplir ***

}




template <typename TYPE>
Matrice<TYPE>::Matrice(const Matrice& src)
{
    // *** à remplir ***
}

template <typename TYPE>
Matrice<TYPE>::~Matrice()
{
    // *** à remplir ***
}



template <typename TYPE>
Matrice<TYPE>& Matrice<TYPE>::operator=(const Matrice& src)
{
    // *** à remplir ***





template <typename TYPE>
TYPE& Matrice<TYPE>::operator()(size_t r, size_t c) {
    // *** à remplir ***
}



template <typename TYPE>
TYPE& Matrice<TYPE>::at(size_t r, size_t c) {
    // *** à remplir ***
}





template <typename TYPE>
void Matrice<TYPE>::redimensionner(size_t n, size_t m)
{
    // *** à remplir ***
}


template <typename TYPE>
pair<size_t, size_t> Matrice<TYPE>::get_dimensions() const
{
    return make_pair(nb_rangees, nb_colonnes);	//voir doc C++
}








template <typename TYPE>
void Matrice<TYPE>::swap_rangees(size_t r1, size_t r2) {
    // *** à remplir ***
}

template <typename TYPE>
void Matrice<TYPE>::swap_colonnes(size_t c1, size_t c2) {
	// *** à remplir ***
}




template <typename TYPE>
void Matrice<TYPE>::afficher() {
    for (size_t i = 0; i < nb_rangees; ++i) {
        for (size_t j = 0; j < nb_colonnes; ++j) {
            cout << this->at(i, j) << " ";
        }
        cout << endl;
    }
    cout << endl;
}





#endif

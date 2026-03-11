#ifndef TP2_DEQUE_ML_H
#define TP2_DEQUE_ML_H



#include <iostream>
#include <stdexcept>


//ML: c'est mal de mettre using namespace std dans une classe.  On devrait m'enlever des points.
//Mais bon, à ne pas pénaliser car j'ai fait cette erreur.
using namespace std;

/**
 * \ brief Classe deque
 */

template <typename TYPE>
class deque
{
private:
    //vous ne pouvez pas ajouter d'autres variables membres, mais vous pouvez ajoute des fonctions privées
    TYPE* debut_cap;    //pointeur vers le tableau de stockage
    TYPE* fin_cap;      //pointeur vers le dernier element du tableau de stockage
    TYPE* debut_elem;    //pointeur vers le 1er element de l'utilisateur
    TYPE* fin_elem;    //pointeur vers le dernier element

    //ajout ml, pas obligatoire
    size_t get_cap() const
    {
        if (!debut_cap)
            return 0;
        else
            return fin_cap - debut_cap + 1;
    }

public:
    //NOTE: si vous ne le saviez pas déjà, les déclarations de fonctions en en-tête n'exigent pas de
    //donner de nom aux paramètres.  Par contre, les paramètres doivent être nommés dans l'implémentation.


    // constructeur initialement avec 0 elements - a vous de choisir une capacite initiale
    deque();

    // constructeur avec dimension initiale - a vous de choisir une capacite initiale
    deque(size_t);

    // Copieur.  Il est attendu que debut_elem et fin_elem soient aient le meme positionnement que la source,
    // relativement a debut_cap.  
    deque(const deque&);

    // destructeur
    ~deque();


    //affectateur.  Il est attendu que debut_elem et fin_elem soient aient le meme positionnement que la source,
    // relativement a debut_cap.  
    deque& operator=(const deque&);

    //changement de dimension.  Si la nouvelle dimension est plus petite que la capacite, ne pas detruire le tableau
    //actuel.  Si la nouvelle dimension est plus grande que la capacite, detruire.
    void resize(size_t);

    //changement de la capacite - si plus petite que la dimension, alors certain éléments seront perdus.
    //Il est attendu que reserve detruise toujours le tableau en memoire, peu importe le parametre
    void reserve(size_t);


    // mise a zero de la capacite (et de la dimension)
    void clear();

    //ajouter element au debut
    void push_front(const TYPE&);

    //retirer premier element (ne fait rien si vide)
    void pop_front();

    //ajouter element a la fin 
    void push_back(const TYPE&);

    //retirer dernier element (ne fait rien si vide)
    void pop_back();

    // permutation: échange le contenu de *this avec celui de l'argument.  Fonction standard de la SL.
    void swap(deque&);

    //selecteur : taille
    size_t size() const;

    //selecteur : est vide ?
    bool empty() const;

    //selecteur : dernier element
    TYPE& back();

    //selecteur const : dernier element
    const TYPE& back() const;

    //selecteur : premier element
    TYPE& front();

    //selecteur const : premier element
    const TYPE& front() const;

    //selecteur : ieme element.  Ne PAS vérifier les bornes du paramètre.
    TYPE& operator[](size_t);

    //selecteur const : ieme element.  Ne PAS vérifier les bornes du paramètre.
    //Cette version sera appelée dans un contexte const (par ex, si une fonction const utilise le [])
    const TYPE& operator[](size_t) const;


    //affichage des éléments du premier au dernier
    void afficher() const;
};




////////////////////////////////////////////////////////////////////////////////////
// IMPLÉMENTATION
////////////////////////////////////////////////////////////////////////////////////



template <typename TYPE>
deque<TYPE>::deque()
{
    debut_cap = nullptr;
    clear();
}





template <typename TYPE>
deque<TYPE>::deque(size_t n) : deque()
{
    debut_cap = nullptr;
    resize(n);
}




template <typename TYPE>
deque<TYPE>::deque(const deque& src) : deque()
{
    debut_cap = nullptr;
    (*this) = src;  //delegation a l'affectateur
}







template <typename TYPE>
deque<TYPE>::~deque()
{
    clear();
}





//NOTE: le main.cpp ne teste pas cet opérateur.  C'est la responsabilité des étudiants de s'assurer que c'est testé.
//Parfois, si on ajoute dans le main les lignes 
//deque<int> d2;
//d2 = d;
//ça ne compile même pas.  Pénaliser si c'est le cas.
template <typename TYPE>
deque<TYPE>& deque<TYPE>::operator=(const deque& src)
{
    //J'ai parlé de ceci en classe maintenant.  Si ce n'est pas présent, pénaliser légèrement.
    if (this == &src)
        return (*this);

    clear();

    if (src.debut_cap)  //attention de ne pas accéder à la mémoire de src si elle n'est pas initialisée
    {
        //ici, on pouvait soit copier la structure de src, avec debut_elem et fin_elem qui ont les mêmes décalages, 
        //ou bien recopier les éléments dans this->debut_cap en commençant à l'indice 0 (donc ne pas respecter les mêmes décalages
        //mais avoir les mêmes éléments).  C'était au choix, ici je prends l'option 1.
        resize(src.size());

        reserve(src.get_cap());

        for (size_t i = 0; i < src.size(); i++)
        {
            debut_cap[i] = src.debut_cap[i];
        }


        debut_elem = debut_cap + (src.debut_elem - src.debut_cap);
        fin_elem = debut_cap + (src.fin_elem - src.debut_cap);
    }

    return (*this);
}




//NOTE: je n'ai pas spécifié de comportement si n < this->size().  
//Il n'est pas obligatoire de réajuster la capacité si la taille diminue, c'est au choix.
//Par contre, il faut bien sûr l'agrandir si n > get_cap().
template <typename TYPE>
void deque<TYPE>::resize(size_t n)
{
    if (n == 0)
        clear();
    else
    {
        //la 2e condition n'était pas obligatoire
        if (n > get_cap() || n * 4 < get_cap())
            reserve(2 * n);


        size_t offset = ((debut_elem - debut_cap) + n - 1);
        if (offset >= get_cap())
            offset -= get_cap();

        fin_elem = debut_cap + offset;
    }

}





template <typename TYPE>
void deque<TYPE>::reserve(size_t n)
{

    if (n == 0)
        clear();
    else
    {
        if (!debut_cap)   //si deque vide
        {
            debut_cap = new TYPE[n];
            fin_cap = debut_cap + (n - 1);
        }
        else
        {
            //ici, je recopie les éléments en commençant à tmp[0].  Vous pouviez décider d'avoir un décalage.
            size_t newsize = min(n, size());

            TYPE* tmp = new TYPE[n];

            for (size_t i = 0; i < newsize; i++)
            {
                tmp[i] = (*this)[i];
            }

            clear();

            debut_cap = tmp;
            fin_cap = tmp + n - 1;

            if (newsize >= 1)
            {
                debut_elem = debut_cap;
                fin_elem = debut_cap + newsize - 1;
            }
        }
    }
}




template <typename TYPE>
void deque<TYPE>::clear()
{
    if (debut_cap)
        delete[] debut_cap;

    debut_cap = nullptr;
    fin_cap = nullptr;
    debut_elem = nullptr;
    fin_elem = nullptr;

}






template <typename TYPE>
void deque<TYPE>::push_front(const TYPE& val)
{
    //devrait prendre un temps O(1) sauf s'il faut appeler reserve.  
    //Le seul cas où reserve est appelé est s'il n'y a aucune place disponible dans le tableau.
    //Même chose avec les autres push et pop
    if (size() == get_cap())
    {
        reserve(max(2 * get_cap(), (size_t)1));
    }

    if (!debut_elem)
    {
        debut_elem = debut_cap;
        fin_elem = debut_cap;
        (*debut_elem) = val;
    }
    else
    {
        if (debut_elem == debut_cap)
            debut_elem = fin_cap;
        else
            debut_elem--;

        (*debut_elem) = val;
    }

}






template <typename TYPE>
void deque<TYPE>::push_back(const TYPE& val)
{

    if (size() == get_cap())
    {
        reserve(max(2 * get_cap(), (size_t)1));
    }

    if (!fin_elem)
    {
        debut_elem = debut_cap;
        fin_elem = debut_cap;
        (*fin_elem) = val;
    }
    else
    {
        if (fin_elem == fin_cap)
            fin_elem = debut_cap;
        else
            fin_elem++;

        (*fin_elem) = val;
    }
}




template <typename TYPE>
void deque<TYPE>::pop_front()
{
    //Vous pouviez appeler reserve si vous voulez, mais ce n'était pas nécessaire
    //Pas obligatoire de vérifier que size() > 0, ce n'était pas explicitement demandé.
    if (size() == 1)
        clear();
    else
    {
        if (debut_elem == fin_cap)
            debut_elem = debut_cap;
        else
            debut_elem++;
    }
}



template <typename TYPE>
void deque<TYPE>::pop_back()
{
    if (size() == 1)
        clear();
    else
    {
        if (fin_elem == debut_cap)
            fin_elem = fin_cap;
        else
            fin_elem--;
    }
}




template <typename TYPE>
size_t deque<TYPE>::size() const
{
    if (!debut_elem)
        return 0;

    if (fin_elem >= debut_elem)
        return (fin_elem - debut_elem + 1);
    else
        return (fin_cap - debut_elem + 1) + (fin_elem - debut_cap + 1);
}


template <typename TYPE>
bool deque<TYPE>::empty() const
{
    return (size() == 0);
}



template <typename TYPE>
void deque<TYPE>::swap(deque& src)
{
    std::swap(debut_cap, src.debut_cap);
    std::swap(debut_elem, src.debut_elem);
    std::swap(fin_cap, src.fin_cap);
    std::swap(fin_elem, src.fin_elem);
}








template <typename TYPE>
TYPE& deque<TYPE>::back()
{
    return (*this)[size() - 1];
}

template <typename TYPE>
const TYPE& deque<TYPE>::back() const
{
    return (*this)[size() - 1];
}


template <typename TYPE>
TYPE& deque<TYPE>::front()
{
    return (*this)[0];
}


template <typename TYPE>
const TYPE& deque<TYPE>::front() const
{
    return (*this)[0];
}


template <typename TYPE>
TYPE& deque<TYPE>::operator[](size_t i)
{
    size_t offset = ((debut_elem - debut_cap) + i);
    if (offset >= get_cap())
        offset -= get_cap();
    return debut_cap[offset];
}


template <typename TYPE>
const TYPE& deque<TYPE>::operator[](size_t i) const
{
    size_t offset = ((debut_elem - debut_cap) + i);
    if (offset >= get_cap())
        offset -= get_cap();
    return debut_cap[offset];
}





template <typename TYPE>
void deque<TYPE>::afficher() const
{
    std::cout << "Positions relatives a debut_cap: (-1 veut dire nullptr)" << std::endl;
    std::cout << "debut_elem = " << (debut_elem ? (debut_elem - debut_cap) : -1) << std::endl;
    std::cout << "fin_elem = " << (fin_elem ? (fin_elem - debut_cap) : -1) << std::endl;
    std::cout << "fin_cap = " << (fin_cap ? (fin_cap - debut_cap) : -1) << std::endl;

    std::cout << "Capacite = " << (debut_cap ? fin_cap - debut_cap + 1 : 0) << std::endl;
    std::cout << "Dimension = " << size() << std::endl;

    if (empty())
    {
        std::cout << "Le deque est vide." << std::endl;
    }
    else
    {
        std::cout << "Elements utilisateurs = [";
        for (size_t i = 0; i < size(); i++) {
            std::cout << (*this)[i] << (i < size() - 1 ? ", " : "");
        }
        std::cout << "]" << std::endl;

        std::cout << "Elements de debut_cap = [";

        for (size_t i = 0; i < fin_cap - debut_cap + 1; i++) {
            //si on est dans la zone utilisateur
            if ((debut_elem <= fin_elem && debut_cap + i >= debut_elem && debut_cap + i <= fin_elem) ||
                (fin_elem < debut_elem && (debut_cap + i <= fin_elem || debut_cap + i >= debut_elem)))
            {
                std::cout << debut_cap[i];
            }
            else
            {
                std::cout << "X";
            }

            std::cout << (i < fin_cap - debut_cap ? ", " : "");
        }
        std::cout << "]" << std::endl;
    }


}


#endif
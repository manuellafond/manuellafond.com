#include <iostream>


using namespace std;



template <typename TYPE, unsigned int DIM>
class PointxD {
public:
    TYPE tab[DIM];

public:

    //NOTE: même si tab n'est qu'un pointeur, le constructeur par copie et l'opérateur = font
    //une copie automatique de tout le tableau, pas juste du pointeur.  Il ne sont donc pas à implémenter.

    PointxD() {
        for (size_t i = 0; i < DIM; ++i) {
            tab[i] = 0;
        }
    }

    TYPE& operator[](size_t i) {
        return tab[i];
    }


    PointxD operator+(PointxD& p) {
        PointxD<TYPE, DIM> sum;
        for (size_t i = 0; i < DIM; ++i) {
            sum[i] = tab[i] + p[i];
        }
        return sum;
    }


    unsigned int dim() {
        return DIM;
    }

};




int main()
{
    PointxD<int, 4> p;
    p[0] = 0;
    p[1] = 1;
    p[2] = 2;
    p[3] = 3;
    cout << p[2] << endl;
    PointxD<int, 4> q;
    q[1] = 10;
    PointxD<int, 4> psomme = p + q;
    cout << psomme[1] << endl;


    //test du constructeur par copie
    PointxD<int, 4> p_copy(p);
    p_copy[0] = 100;

    cout << "p[0]=" << p[0] << "    p_copy[0]=" << p_copy[0] << endl;


    //test du =
    PointxD<int, 4> q_copy;
    q_copy = q;
    q_copy[0] = 100;
    cout << "q[0]=" << q[0] << "    q_copy[0]=" << q_copy[0] << endl;

}
#pragma once

#ifndef TABLEAU_H
#define TABLEAU_H

#include <iostream>
using std::ostream;

template <typename TYPE>
class Tableau {
private:
	TYPE* tab;
	size_t nbelem;

public:
	Tableau(size_t n)
    {
		tab = new TYPE[n];
		nbelem = n;
	}

	~Tableau()
    {
		delete[] tab;
	}

	TYPE& operator[](size_t i)
    {
		return tab[i];
	}

	TYPE& at(size_t i)
    {
		if (i >= nbelem)
        {
			throw "at est hors des bornes";
		}	
		return tab[i];
	}

	size_t size() const
    {
		return nbelem;
	}

	void pop_back()
    {
		nbelem -= 1;
	}

    void display()
    {   
        cout << "[";
        for (size_t i = 0; i < nbelem; i++)
        {
            cout << tab[i] << ((i < (nbelem - 1)) ? ", " : "");
        }
        cout << "]" << endl;
    }
};
#endif
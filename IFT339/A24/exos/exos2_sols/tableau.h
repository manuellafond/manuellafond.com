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

	Tableau(const Tableau<TYPE>& src)
    {
		// Il est requis de mettre tout pointeur d'élément dynamique à nullptr avant l'assignation
		this->tab = nullptr;
		*this = src;
	}

	~Tableau()
    {
		if(tab)
		{
			delete[] tab;
			tab = nullptr;	
		}
	}

	TYPE& operator[](size_t i)
    {
		return tab[i];
	}

	Tableau<TYPE>& operator=(const Tableau<TYPE>& src)
	{
		if(this != &src)
		{
			this->~Tableau();
			nbelem = src.size();
			tab = new TYPE[nbelem];
			for(int i = 0; i < nbelem; i++)
			{
				tab[i] = src.tab[i];
			}
		}
		return *this;
	}

	Tableau<TYPE> operator+(const Tableau<TYPE>& src)
	{
		Tableau<TYPE> concat(this->size() + src.size());
		for(int i = 0; i < concat.size(); i++)
		{
			if (i < this->size())
				concat[i] = this->tab[i];
			else
				concat[i] = src.tab[i-(this->size())];
		}
		return concat;
	}

	TYPE& at(size_t i) const
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
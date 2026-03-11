#pragma once


/*
constructeur(n): créer un tableau de taille n dynamique
[i]: accéder et modifier la i-ème position  (tab[i])
at(i): accéder et modifier la i-ème position (avec vérification de bornes sur i)
size(): obtenir la taille
pop_back(): enlever le dernier élément, réduire la taille de 1
*/

template <typename TYPE>
class Tableau {
private:
	TYPE* tab;
	size_t nbelem;	//size_t : entier non-signé

public: 


	Tableau(size_t n) {
		tab = new TYPE[n];
		nbelem = n;
	}

	~Tableau() {
		delete[] tab;
	}


	TYPE& operator[](size_t i) {
		return tab[i];
	}


	TYPE& at(size_t i) {
		if (i >= nbelem) {
			throw "at est hors des bornes";
		}
		
		return tab[i];
	}


	size_t size() const {
		return nbelem;
	}


	void pop_back() {
		nbelem -= 1;
	}


	
};



#include <iostream> 

using namespace std;


template <typename TYPE> 
class Tableau {
private:
	
	size_t nbelem;
	TYPE* tab;	//j'aurais pu mettre TYPE* tab = nullptr, mais je prefere garder ca dans le code

public:
	

	Tableau() {
		//je redirige toute creation vers redimensionner, 10 = taille par defaut
		tab = nullptr;
		redimensionner(10);
	}

	Tableau(size_t taille) {
		tab = nullptr;
		redimensionner(taille);
	}

	Tableau(const Tableau& src) {
		tab = nullptr;
		(*this) = src;
	}


	~Tableau() {
		if (tab)
			delete[] tab;
	}


	TYPE& operator[](const size_t i) {
		return tab[i];
	}


	void operator=(const Tableau& src) {
		
		redimensionner(src.nbelem);

		for (size_t i = 0; i < src.nbelem; ++i) {
			tab[i] = src.tab[i];
		}
	}


	void redimensionner(size_t taille) {

		TYPE* tmp = new TYPE[taille];
		
		if (tab) {
			for (size_t i = 0; i < min(taille, nbelem); ++i) {
				tmp[i] = tab[i];
			}

			delete[] tab;
		}

		tab = tmp;
		nbelem = taille;

	}



	size_t size() {
		return nbelem;
	}


};


int main() {
	Tableau<double> t(10);
	t[5] = 5;
	cout << t[5];

	Tableau<double> t2(t);
	

}







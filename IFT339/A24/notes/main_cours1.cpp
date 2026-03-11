#include <vector>
#include <set>
#include <iostream>

using namespace std;



void test_vector(int nb_ins) {
	vector<int> v;

	for (int i = 0; i < nb_ins; ++i) {
		v.push_back(i);
	}

	int count = 0;
	for (int i = 0; i < nb_ins; ++i) {
		if (std::find(v.begin(), v.end(), i) != v.end()) {
			count++;
		}

		if (i % 10000 == 0) {
			cout << "i=" << i << endl;
		}
	}

	cout << "Count=" << count << endl;
}




void test_set(int nb_ins) {
	set<int> s;

	for (int i = 0; i < nb_ins; ++i) {
		s.insert(i);
	}

	int count = 0;
	for (int i = 0; i < nb_ins; ++i) {
		if (s.find(i) != s.end()) {
			count++;
		}

		if (i % 10000 == 0) {
			cout << "i=" << i << endl;
		}
	}

	cout << "Count=" << count << endl;
}




void f(int t[4]) {
	t[2] = 10;

	cout << "t=" << t << endl;
	cout << "&t=" << &t << endl;
}

void test_tabs() {
	int tab[4];

	tab[0] = 1;
	tab[1] = 2;
	tab[2] = 3;
	tab[3] = 4;

	//la ligne ci-dessous affiche une adresse de la mémoire, car le 
	//type de la variable "tab" est "adresse où les entrées du tableau débutent"
	cout << "tab=" << tab << endl;

	//affiche 1
	cout << "tab[0]=" << tab[0] << endl;

	//le & accède à l'adresse où une variable est stockée.  Le &tab[0] affiche 
	//la même adresse que cout << tab, car l'entrée 0 est l'endroit où le tableau commence à être stocké.
	cout << "&tab[0]=" << &tab[0]<<endl;

	//affiche l'adresse &tab[0], plus 4.  Ceci est parce que tab[1] est stocké 4 octets plus loin que tab[0]
	cout << "&tab[1]=" << &tab[1] << endl;

	// Même si f reçoit t par valeur, le tableau n'est pas copié.  La chose qui est copiée à l'appel de f est 
	// l'objet tab, qui est en fait une adresse.  Donc, la variable t est une copie de l'adresse tab, et non une
	// copie de tout le tableau.  Ensuite, quand on fait t[2], on accède à la zone mémoire à la même adresse que tab.
	f(tab);
	cout << "tab[2]=" << tab[2] << endl;	//affiche 10



	int ctab[4];
	//ctab = tab;
	
	//La ligne "ctab = tab" ne compile pas avec visual studio et il est intéressant de se demander pourquoi.
	//int ctab[4]; réserve 4*sizeof(int) à l'adresse ctab.
	//Si on faisait ctab = tab, alors l'adresse de ctab deviendrait celle de tab, 
	//et il n'y aurait plus aucune variable qui pointerait sur les entrées originales de ctab, 
	//rendant leur suppression impossible et créant une fuite de mémoire.
	
}







int main() {

	//test_vector(1000000);
	//test_set(1000000);

	test_tabs();

}





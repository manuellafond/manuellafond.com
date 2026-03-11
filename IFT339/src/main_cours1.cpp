#include <iostream>
#include <vector>

#include <set>


using namespace std;




void fct(int t[4]) {
	t[2] = 100;
}

int main() {

	
	int tab[4];
	tab[2] = 2;
	fct(tab);
	cout << tab[2];		//affiche 100.  Pourquoi?!


	
	//vector<int> v;
	set<int> v;

	int nbelem = 1000000;

	for (int i = 0; i < nbelem; ++i) {
		//v.push_back(i);
		v.insert(i);
	}

	int nbfound = 0;
	for (int i = 0; i < nbelem; ++i) {
		//if (std::find(v.begin(), v.end(), i) != v.end()) {
		if (v.find(i) != v.end()){
			nbfound++;
		}

		if (i % 1000 == 0) {
			//cout << i << " done" << endl;
		}
	}

	cout << "nbfound=" << nbfound << endl;
	
	

	return 0;
}
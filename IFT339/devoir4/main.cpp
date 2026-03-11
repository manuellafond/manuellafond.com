#include <string>
#include <iostream>
#include <vector>

#include "arbrelexico.h"

using namespace std;

int main() {


	arbre_lexico<string> ens;

	ens.inserer("allo");
	ens.inserer("albert");
	ens.inserer("alban");
	ens.inserer("al");
	ens.inserer("bob");
	ens.inserer("bobo");
	ens.inserer("boblep");

	cout << "Test de 7 insertions" << endl;
	cout << "ens.size() = " << ens.size() << endl;

	ens.afficher_arbre();

	cout << "----------------------------" << endl;
	cout << "Test de contient" << endl;

	cout << "Contient allo=" << ens.contient("allo") << endl;
	cout << "Contient albert=" << ens.contient("albert") << endl;
	cout << "Contient alberta=" << ens.contient("alberta") << endl;
	cout << "Contient alban=" << ens.contient("alban") << endl;
	cout << "Contient al=" << ens.contient("al") << endl;
	cout << "Contient albe=" << ens.contient("albe") << endl;
	cout << "Contient bob=" << ens.contient("bob") << endl;
	cout << "Contient bab=" << ens.contient("bab") << endl;
	cout << "Contient charles=" << ens.contient("charles") << endl;

	cout << "----------------------------" << endl;
	cout << "Test d'insert multiple" << endl;
	ens.inserer("bob");
	ens.inserer("bob");
	ens.inserer("bob");		//insertions multiples = ne fait rien
	cout << "post-bob ens.size() = " << ens.size() << endl;

	cout << "----------------------------" << endl;
	cout << "Test de bino" << endl;
	ens.inserer("bino");
	cout << "post-bino ens.size() = " << ens.size() << endl;

	cout << "----------------------------" << endl;
	cout << "Test de get_tri" << endl;
	cout << "Contenu en ordre croissant" << endl;
	vector<string> tries = ens.get_tri();
	for (string s : tries) {
		cout << s << endl;
	}


	cout << "----------------------------" << endl;
	cout << "Test de suppression" << endl;
	ens.supprimer("albert");
	ens.supprimer("al");
	ens.supprimer("boblep");
	ens.supprimer("albino");	//suppression de tuple non-existant = ne fait rien
	
	cout << "post-3-suppression, ens.size() = " << ens.size() << endl;
	ens.afficher_arbre();

	cout << "----------------------------" << endl;
	cout << "Test de tuple vide" << endl;
	ens.inserer("");
	cout << "post-insertion de vide, ens.size() = " << ens.size() << endl;
	cout << "contient vide = " << ens.contient("") << endl;
	ens.afficher_arbre();










	//tests avec vector<int> pour tuples
	cout << "-----------------------------" << endl;
	cout << "-----------------------------" << endl;
	cout << "-----------------------------" << endl;
	cout << "Tests de arbre_lexico<vector<int>>" << endl;

	arbre_lexico<vector<int>> ensvec;
	ensvec.inserer({ 2, 4, 6 });		//{2,4,6} est converti automatiquement en vector avant d'être passé en argument
	ensvec.inserer({ 2, 6, 10 });
	ensvec.inserer({ 2, 4, 9, 10 });
	ensvec.inserer({ 2, 4, 6, 8, 10 });
	ensvec.inserer({ 3, 6, 9 });
	ensvec.inserer({ 3, 6, 9, 12 });
	ensvec.inserer({ 3, 6, 12, 15 });

	cout << "Test de 7 insertions" << endl;
	cout << "ensvec.size() = " << ensvec.size() << endl;
	ensvec.afficher_arbre();


	cout << "-----------------------------" << endl;
	cout << "Test de get_tri" << endl;
	vector<vector<int>> vectri = ensvec.get_tri();
	for (vector<int>& v : vectri) {
		for (int i : v) {
			cout << i << " ";
		}
		cout << endl;
	}


	cout << "-----------------------------" << endl;
	cout << "Test de suppression" << endl;
	ensvec.supprimer({ 2, 6, 10 });
	ensvec.supprimer({ 2, 6, 10 });
	ensvec.supprimer({ 3, 6, 9, 12 });
	cout << "ensvec.size() = " << ensvec.size() << endl;

	cout << endl << "Test de contient" << endl;
	cout << "Contient {3,6,9} = " << ensvec.contient({ 3,6,9 }) << endl;
	cout << "Contient {3,6,9,12} = " << ensvec.contient({ 3,6,9,12 }) << endl;
	ensvec.afficher_arbre();




	//quelques tests avec list<string>
	cout << "-----------------------------" << endl;
	cout << "-----------------------------" << endl;
	cout << "-----------------------------" << endl;
	arbre_lexico<list<string>> enslist;
	enslist.inserer({ "allo" });
	enslist.inserer({ "bob", "bino" });
	enslist.inserer({ "bob", "gino" });
	enslist.inserer({ "allo", "aloha" });

	cout << "Tests avec list<string>" << endl;
	cout << "Contient (bob) = " << enslist.contient({ "bob" }) << endl;
	cout << "Contient (bob, bino) = " << enslist.contient({ "bob", "bino" }) << endl;
	enslist.afficher_arbre();

	cout << "-----------------------------" << endl;
	cout << "get_tri" << endl;
	vector<list<string>> listtri = enslist.get_tri();
	for (list<string>& liste : listtri) {
		for (string s : liste) {
			cout << s << " ";
		}
		cout << endl;
	}

	

	return 0;
}
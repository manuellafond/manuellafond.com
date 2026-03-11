#include "tableau.h"
#include <iostream>
#include <random>

using std::cout;
using std::cin;
using std::endl;
using std::pair;
using std::string;
using std::ostream;
using std::mt19937;
using std::random_device;
using std::uniform_int_distribution;

pair<int,int> min_max(const Tableau<int>& src)
{
    int i = 0;
    int j = 0;
    for(int h = 1; h < src.size(); h++)
    {
        if(src.at(i) > src.at(h))
        {
            i = h;
        }
        if(src.at(j) < src.at(h))
        {
            j = h;
        }
    }
    return pair<int,int>(i,j);
}

pair<int,int> buy_low_sell_high(const Tableau<int>& src)
{
    //Exercice 3b
    //Décommentez le code associé à cet exercice dans la fonction main.
    throw("Remplacez cette ligne par votre implementation");
}

bool is_anagram(const Tableau<char>& tableau1, const Tableau<char>& tableau2)
{
    //Exercice 3c
    //Décommentez le code associé à cet exercice dans la fonction main.
    throw("Remplacez cette ligne par votre implementation");
}

int missing_int(const Tableau<int>& tableau)
{
    //Exercice 3d
    //Décommentez le code associé à cet exercice dans la fonction main.
    throw("Remplacez cette ligne par votre implementation");
}

int main()
{
    random_device seeder;
    mt19937 engine(seeder());
    uniform_int_distribution<int> dist(10, 30);
    Tableau<int> tableau(dist(engine));
    for (size_t i = 0; i < tableau.size(); i++)
    {
        tableau[i] = dist(engine);
    }

    // Vous pouvez utiliser la méthode d'affichage suivante au besoin.
    cout << "MATRICE TABLEAU (CONTENU ALEATOIRE) POUR EXERCICES 3A et 3B." << endl;
    tableau.display();

    /* Exercice 1 */
    {
        Tableau<int> tableau2 = tableau;
    }

    /* Exercice 1a */
    // Voir tableau.h

    /* Exercice 1b */
    // Voir tableau.h 

    /* Exercice 2 */
    // Voir tableau.h
    cout << "\nExercice 2" << endl;
    Tableau<int> tableau1(5);
    for (size_t i = 0; i < tableau1.size(); i++)
    {
        tableau1[i] = i;
    }
    tableau1.display();
    Tableau<int> tableau2(5);
    for (size_t i = 0; i < tableau2.size(); i++)
    {
        tableau2[i] = i;
    }
    tableau2.display();
    Tableau<int> concat = tableau1 + tableau2;
    cout << "SOLUTION" << endl;
    concat.display();

    /* Exercice 3 */

    /* Exercice 3a */
    cout << "\nExercice 3a" << endl;
    pair<int,int> mm = min_max(tableau);
    cout << "SOLUTION" << endl;
    cout << "(" << mm.first << "," << mm.second << ")" << endl;

    /* Exercice 3b */
    cout << "\nExercice 3b" << endl;
    cout << "SOLUTION" << endl;
    // DÉCOMMENTEZ LE CODE SUIVANT POUR L'EXERCICE 3b
    // pair<int,int> blsh = buy_low_sell_high(tableau);
    // cout << "(" << blsh.first << "," << blsh.second << ")" << endl;

    /* Exercice 3c */
    cout << "\nExercice 3c" << endl;
    cout << "MATRICE TABLEAU3" << endl;
    Tableau<char> tableau3(5);
    tableau3[0] = 's';
    tableau3[1] = 't';
    tableau3[2] = 'u';
    tableau3[3] = 'd';
    tableau3[4] = 'y';
    tableau3.display();
    cout << "MATRICE TABLEAU4" << endl;
    Tableau<char> tableau4(5);
    tableau4[0] = 'd';
    tableau4[1] = 'u';
    tableau4[2] = 's';
    tableau4[3] = 't';
    tableau4[4] = 'y';
    tableau4.display();
    cout << "SOLUTION" << endl;
    // DÉCOMMENTEZ LE CODE SUIVANT POUR L'EXERCICE 3c
    // bool anagram = is_anagram(tableau3, tableau4);
    // cout << ((anagram == true) ? "true" : "false") << endl;

    /* Exercice 3d */
    cout << "\nExercice 3d" << endl;
    cout << "MATRICE TABLEAU5" << endl;
    Tableau<int> tableau5(9);
    tableau5[0] = 1;
    tableau5[1] = 2;
    tableau5[2] = 3;
    tableau5[3] = 4;
    tableau5[4] = 5;
    tableau5[5] = 7;
    tableau5[6] = 8;
    tableau5[7] = 9;
    tableau5[8] = 0;
    tableau5.display();
    cout << "MATRICE TABLEAU6" << endl;
    Tableau<int> tableau6(9);
    tableau6[0] = 2;
    tableau6[1] = 5;
    tableau6[2] = 3;
    tableau6[3] = 6;
    tableau6[4] = 7;
    tableau6[5] = 1;
    tableau6[6] = 9;
    tableau6[7] = 8;
    tableau6[8] = 0;
    tableau6.display();
    cout << "MATRICE TABLEAU7" << endl;
    Tableau<int> tableau7(9);
    tableau7[0] = 4;
    tableau7[1] = 2;
    tableau7[2] = 5;
    tableau7[3] = 7;
    tableau7[4] = 6;
    tableau7[5] = 8;
    tableau7[6] = 1;
    tableau7[7] = 3;
    tableau7[8] = 0;
    tableau7.display();
    cout << "SOLUTION" << endl;
    // DÉCOMMENTEZ LE CODE SUIVANT POUR L'EXERCICE 3d
    // cout << missing_int(tableau5) << endl;
    // cout << missing_int(tableau6) << endl;
    // cout << missing_int(tableau7) << endl;
}
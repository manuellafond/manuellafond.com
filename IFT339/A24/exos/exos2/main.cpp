#include "tableau.h"
#include <iostream>
#include <random>

using std::cout;
using std::cin;
using std::endl;
using std::string;
using std::ostream;
using std::mt19937;
using std::random_device;
using std::uniform_int_distribution;

int main()
{
    random_device seeder;
    mt19937 engine(seeder());
    uniform_int_distribution<int> dist(10, 50);
    Tableau<int> tableau(dist(engine));
    for (size_t i = 0; i < tableau.size(); i++)
    {
        tableau[i] = dist(engine);
    }

    // Vous pouvez utiliser la méthode d'affichage suivante au besoin.
    tableau.display();

    /* Exercice 1 */
    {
        Tableau<int> tableau2 = tableau;
    }

    /* Exercice 1a */

    /* Exercice 1b */

    /* Exercice 2 */
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
    // Tableau<int> concat = tableau1 + tableau2;

    /* Exercice 3 */

    /* Exercice 3a */

    /* Exercice 3b */

    /* Exercice 3c */
    Tableau<char> tableau3(5);
    tableau3[0] = 's';
    tableau3[1] = 't';
    tableau3[2] = 'u';
    tableau3[3] = 'd';
    tableau3[4] = 'y';
    tableau3.display();
    Tableau<char> tableau4(5);
    tableau4[0] = 'd';
    tableau4[1] = 'u';
    tableau4[2] = 's';
    tableau4[3] = 't';
    tableau4[4] = 'y';
    tableau4.display();

    /* Exercice 3d */
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
}
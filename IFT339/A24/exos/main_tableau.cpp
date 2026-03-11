#include <iostream>


#include "tableau.h"


int main()
{
    Tableau<double> tab1(3);
    Tableau<double> tab2(tab1);

    Tableau<double> tab3;
    tab3 = tab2;

    tab1[2] = 1;
    tab2[2] = 2;
    tab3[2] = 3;

    cout<<tab1[2]<<" "<<tab2[2]<<" "<<tab3[2]<<endl;


    tab1.redimensionner(4);
    tab2.redimensionner(20);
    tab3.redimensionner(1);

    cout<<tab1[2]<<" "<<tab2[2]<<" "<<tab3[2]<<endl;	//tab3[2] est louche


    Tableau<double>* tptr = &tab1;
    (*tptr)[0] = 100;

    cout<<tab1[0]<<" "<<(*tptr)[0]<<endl;

    return 0;
}
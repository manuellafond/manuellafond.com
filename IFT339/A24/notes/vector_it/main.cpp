#include <iostream>
#include <algorithm>


#include "vector.h"

//#include <vector>
using namespace std;


int main()
{
    vector<int> v;
    v.push_back(0);
    v.push_back(1);
    v.push_back(2);
    v.push_back(3);
    v.push_back(4);


    bool ins_done = false;
    vector<int>::iterator it = v.begin();
    while (it != v.end()) {        
        cout << *it << endl;


        if (*it == 2 && !ins_done) {
            it = v.insert(it, 100);
            ins_done = true;
        }
        else{
            ++it;
        }
        
    }











    /*vector<int> v;

    for (int i = 0; i < 10; ++i) {
        v.push_back(i);
    }


    vector<int>::iterator it = v.begin();

    bool ins_done = false;

    while (it != v.end()) {
        std::cout << *it << std::endl;

        if (*it == 5 && !ins_done) {
            std::cout << "Insertion avant *it=5" << std::endl;
            it = v.insert(it, 100);
            
            ins_done = true;
        }
        else{
            ++it;
        }
    }

    it = v.begin();
    while (it != v.end()) {
        std::cout << *it << std::endl;

        if (*it == 100) {
            std::cout << "Erase *it=100" << std::endl;
            //it = v.erase(it);
            ++it;
        }
        else {
            ++it;
        }
    }*/






    /*
    vector<int> v;

    for (int i = 0; i < 10000; ++i) {
        v.push_back(i);
    }

    vector<int> z;
    vector<int> zz;

    z = zz = v;


    std::cout << "v.size() = " << v.size() << std::endl;
    std::cout << "z.size() = " << z.size() << std::endl;
    std::cout << "zz.size() = " << zz.size() << std::endl;

    {
        vector<int> w(v);
        std::cout << "w.size() = " << w.size() << std::endl;

        for (int i = 0; i < 100; ++i) {
            w.pop_back();
        }

        std::cout << "After pop backs" << std::endl;
        std::cout << "v.size() = " << v.size() << std::endl;
        std::cout << "w.size() = " << w.size() << std::endl;
    }


    for (int i = 0; i < 10002; ++i) {
        int res = v.find(i);

        if (res == -1) {
            std::cout << "i=" << i << " absent" << std::endl;
        }
    }
    */
}

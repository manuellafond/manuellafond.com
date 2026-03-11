#include <iostream>

#include <vector>

#include "vector.h"

int main()
{

    std::vector<int> stdv(10);
    stdv[3] = 10;

    auto it = stdv.begin();
    while (it != stdv.end()) {
        if (*it == 10) {
            it = stdv.insert(it, 5);
            ++it;
        }
        ++it;
    }



    vector<int> v;

    for (int i = 0; i < 10; ++i) {
        v.push_back(i);
    }


    std::cout << "v.size() = " << v.size() << std::endl;

    

    for (auto it = v.begin(); it != v.end(); ++it) {
        std::cout << (*it) << std::endl;
    }
    
    
}


#include <iostream>

#include "vector.h"

int main()
{
    vector<int> v;

    for (int i = 0; i < 10000; ++i) {
        v.push_back(i);
    }

    std::cout << "v.size() = " << v.size() << std::endl;

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
}


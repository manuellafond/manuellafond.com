#pragma once


template <typename TYPE>
class vector {
private:
	TYPE* tab;
	size_t nbelem;
	size_t cap;

	void clean() {
		if (tab)
			delete[] tab;
		tab = nullptr;
		cap = 0;
	}

public:

	vector() {
		tab = nullptr;
		nbelem = 0;
		reserve(10);
	}

	~vector() {
		clean();
	}


	vector(const vector& src) {
		tab = nullptr;
		(*this) = src;
	}

	vector& operator=(const vector& src) {
		clean();

		tab = new TYPE[src.cap];
		cap = src.cap;
		nbelem = src.nbelem;
		for (size_t i = 0; i < src.nbelem; ++i) {
			tab[i] = src.tab[i];
		}

		return *this;
	}


	void push_back(const TYPE& val) {
		if (cap == nbelem)
			reserve(2 * cap);

		tab[nbelem] = val;
		nbelem++;
	}


	void pop_back() {
		if (nbelem > 0)
			nbelem--;
	}



	void reserve(size_t cap) {
		TYPE* temp = new TYPE[cap];

		for (size_t i = 0; i < nbelem; ++i) {
			temp[i] = tab[i];
		}

		clean();

		tab = temp;
		this->cap = cap;
	}

	size_t size() {
		return nbelem;
	}


	TYPE& operator[](size_t i) {
		return tab[i];
	}

	TYPE& at(size_t i) {
		if (i >= nbelem)
			throw "AARGH!";

		return tab[i];
	}


	//Rappel: ceci n'est pas dans la SL
	int find(const TYPE& val) {
		for (int i = 0; i < nbelem; ++i) {
			if (tab[i] == val)
				return i;
		}
		return -1;
	}



	void afficher() {
		for (int i = 0; i < nbelem; ++i) {
			std::cout << "tab[" << i << "]=" << tab[i] << std::endl;
		}
	}

	class iterator;
	iterator begin() {
		iterator it;
		it.ptr = this->tab;
		return it;
	}

	iterator end() {
		iterator it;
		it.ptr = this->tab + nbelem;
		return it;
	}

	iterator insert(const iterator& it, const TYPE& val) {

		int pos = it.ptr - this->tab;

		if (cap == nbelem) {
			reserve(2 * cap);
		}

		for (int i = nbelem - 1; i >= pos; --i) {
			tab[i + 1] = tab[i];
		}
		tab[pos] = val;

		nbelem++;

		iterator it_ret;
		it_ret.ptr = tab + pos;

		return it_ret;
	}

};


template <typename TYPE>
class vector<TYPE>::iterator {
	friend class vector;	//la classe courante donne accès à vector aux membres privés
private:
	TYPE* ptr;
public:

	iterator& operator++() {	//prefixe
		ptr++;
		
		return *this;
	}


	iterator operator++(int) {	//postfixe
		iterator copie = *this;
		ptr++;
		
		return copie;
	}

	bool operator==(const iterator& it) {
		return (this->ptr == it.ptr);
	}

	bool operator!=(const iterator& it) {
		return !(*this == it);
	}

	TYPE& operator*() {
		return *ptr;
	}


};




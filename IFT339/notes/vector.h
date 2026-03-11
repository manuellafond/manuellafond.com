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
	}

public:

	class iterator;	//définit vector<TYPE>::iterator

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
		
		if (this == &src)	
			return *this;
		
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
		if (nbelem > 0) {
			nbelem--;

			if (nbelem < cap / 4)
				reserve(2 * nbelem);
		}
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
		if (i < 0 || i >= nbelem)
			throw "AARGH!";

		return tab[i];
	}



	void clear() {
		nbelem = 0;
		reserve(10);
	}


	//Rappel: ceci n'est pas dans la SL
	int find(const TYPE& val) {
		for (int i = 0; i < nbelem; ++i) {
			if (tab[i] == val)
				return i;
		}
		return -1;
	}


	iterator begin() {
		iterator it;
		it.parent = this;
		it.pos = 0;
		return it;
	}


	iterator end() {
		iterator it;
		it.parent = this;
		it.pos = nbelem;
		return it;
	}


	iterator insert(iterator& it, TYPE& val) {
		//exercice
		return begin();	//pour que ca compile
	}



};





template <typename TYPE>
class vector<TYPE>::iterator {

	friend class vector;	//permet à vector d'accéder aux membres privés ici
private:
	vector* parent;
	size_t pos;

	//TYPE* ptr_val;

public:
	TYPE& operator*() {
		return (*parent)[pos];
	}


	//get et set
	//size_t& posvar() {
	//	return pos;
	//}


	//++it : retourne l'objet après itération
	iterator& operator++() {
		++pos;

		return (*this);
	}

	//it++ : retourne une copie de l'objet avant itération
	iterator operator++(int) {
		iterator copie = (*this);
		
		++pos;
		
		return copie;
	}


	bool operator!=(const iterator& autre) {
		return (this->parent != autre.parent || this->pos != autre.pos);
	}


	bool operator==(const iterator& autre) {
		return !(*this != autre);
	}




};







/*
//version 2
template <typename TYPE>
class vector<TYPE>::iterator {
	
private:
	TYPE* ptr_val;	//pointeur sur la case courante de vector.tab

public:

	iterator() {
		
	}

	iterator(TYPE* ptr_val) {
		this->ptr_val = ptr_val;
	}


	TYPE& operator*() {
		return *ptr_val;
	}

	iterator& operator++() {		//++it
		ptr_val++;
		return *this;
	}

	iterator operator++(int) {		//it++
		iterator copy_before = *this;
		ptr_val++;
		return copy_before;
	}


	bool operator==(const iterator& autre) {
		return (ptr_val == autre.ptr_val);
	}

	bool operator!=(const iterator& autre) {
		return !((*this) == autre);
	}

};

*/







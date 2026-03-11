#include <iostream>

using namespace std;


template <typename T>
class Point {
public:
private:
	T x;
	T y;

public:

	Point();

	Point(T x, T y);

	Point(const Point& src);


	void operator=(const Point& src);




	~Point();

	void set_x(T _x);

	T get_x();


	void set_y(T _y);

	T get_y();


};

template <typename T>
Point<T>::Point() {
	x = 0;
	y = 0;
}

template <typename T>
Point<T>::Point(T x, T y) {
	this->x = x;
	this->y = y;
}

template <typename T>
Point<T>::Point(const Point& src) {
	cout << "copieur" << endl;

	(*this) = src;

}

template <typename T>
void Point<T>::operator=(const Point& src) {
	cout << "operator=" << endl;

	x = src.x;
	y = src.y;
}



template <typename T>
Point<T>::~Point() {
	cout << "Destructeur (x, y) = (" << x << ", " << y << ")" << endl;
}

template <typename T>
void Point<T>::set_x(T _x) {
	x = _x;
}

template <typename T>
T Point<T>::get_x() {
	return x;
}

template <typename T>
void Point<T>::set_y(T _y) {
	y = _y;
}

template <typename T>
T Point<T>::get_y() {
	return y;
}


int main() {

	
	Point<int> p1(10, 5);	//p1 Point_int
	Point<int> p2(p1);	//p2 Point_double

	cout << "p1.x="<< p1.get_x() << endl;
	cout << "p2.x="<< p2.get_x() << endl;
	
	Point<int> p3;
	p3 = p1;	//p3.operator=(p1)

	return 0;
}
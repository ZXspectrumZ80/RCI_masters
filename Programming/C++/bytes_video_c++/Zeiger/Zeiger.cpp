#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
	

int x = 0;
int *px = &x;

std::cout <<"x: " << x << ", *px; " << *px << "\n";

x = 10;

std::cout << "x: " << x << ", *px " << *px << "\n";


	return 0;
}

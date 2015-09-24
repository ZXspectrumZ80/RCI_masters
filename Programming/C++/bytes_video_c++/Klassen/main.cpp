#include <iostream>
#include <string>

class Person
{
	private :
		std::string name;
	public:
		Person(std::string n):name(n)
			{

						}

void greet()
{
	std::cout << "Hallo, ich bin  " << name << "!\n";
}


};

int main()
{
  
  Person h("Heinz");
  Person e("Egon");

  h.greet();
  e.greet();

	return 0;
}

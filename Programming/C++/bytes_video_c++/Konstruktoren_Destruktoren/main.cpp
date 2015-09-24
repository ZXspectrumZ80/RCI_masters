#include <string>
#include <iostream>
using namespace std;

class Test{
    int x;
    
public :
    Test():x(10)
    {
        std::cout << "Test angelegt! Wert: " << x << std::endl;
    }
    
    Test(Test const &t):x(t.x+1){
        
        std::cout << "Test kopiert! Wert: " << x << std::endl;
    }
    
    ~Test(){
        std:: cout << "Test zerstört!Wert : " << x << std::endl;
    }
    
    
    
    
};


int main(){
    Test t;
    Test t_copy(t);
    std::cout << "Das Programm beendet sich\n";
    
    return 0;
}
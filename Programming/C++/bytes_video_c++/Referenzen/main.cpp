#include <iostream>
using namespace std;

class Test
{
    
    
public:
    Test(){
        
    }
    
    Test(Test const & rhs)
    {
        std::cout << "Test wurde kopiert!\n";
    }
    
    int x;
};

void f(Test p){
    
    p.x = 10;
}

void f_ref(Test &p){
    p.x = 11;
}

void f_const_ref(Test const &p) {
   // p.x = 12;
}



int main(){
    
    Test t;
    t.x = 0;
    
    f_ref(t);
    std::cout << t.x << "\n";
    
    
    f_const_ref(t);
    std :: cout << t.x << "\n";
    return 0;
}
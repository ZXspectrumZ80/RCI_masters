#include <iostream>
using namespace std;

class Test{
    
    int x;
    
public :
    void f(){
        x = x+1;
    }
    
    void const_f() const
    {
       // x = x+1;
    }
};


int main(){
    
    Test const t = Test();
    t.const_f();
    
    
    
    return 0;
    
}
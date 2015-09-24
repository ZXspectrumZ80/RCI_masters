#include <iostream>
using namespace std;

int main(){
    
    int a = 15;
    int const b = 10;
    // const int b1 = 10;
    
    int const *pa = &a;
    int const * const pb = &b;
    
    a = 5;
   // b = 2;
    
   // *pa = 5;
    //pb  = &a;
}
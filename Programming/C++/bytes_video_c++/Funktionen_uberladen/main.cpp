#include <iostream>

using namespace std;

void print(int x){
    
    cout << "The value is " << x << endl;
}

void print(int x,int y){
    
    cout << "The value is " << x << y << endl;
}

void print(double x){
    cout << "The value is " << x << endl;
}

void print(float x){
    cout << "The value is " << x << endl;
}



int main(){
    
    print(10);
    print(20, 3);
    print(10.0);
    print(10.0f);
}
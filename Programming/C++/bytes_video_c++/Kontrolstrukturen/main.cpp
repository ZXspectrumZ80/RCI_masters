/* 
 * File:   main.cpp
 * Author: neeraj
 *
 * Created on September 20, 2015, 1:07 PM
 */

#include <iostream>
#include <cstdlib>


void demoIf()
{
    
    int x = 10;
    if (10==x){
        std::cout << "x ist 10\n";
    }
    else {
        std::cout << "x ist nicht 10\n";
    }
    
    
    
}

void demoSwitch(){
    
    int x=42;
    switch(x)
    {
        case 42:
            std::cerr << "The answer to life,the universe and everything!\n";
            break;
        case 23:
            std::cerr << "Hm....Hacker?\n";
            break;
        case 17:
            std::cerr << "Primzahlfan!";
            break;
        default:
            std::cerr << "Langweilig\n";
    }
}

void demoWhile(){
    int x = 0;
    while(x<4){
        x = x+1;
        std::cout << "Ente!";
    }
}

void demoDo(){
    int x = 0;
    do {
        x = x+1;
        std::cout << "Ente!\n";
    }while(x<4);
}

void demoForClassic(){
    for (int x = 0;x < 4; x=x+1){
        std::cout << "Ente!\n";
    }
}

void demoForNew(){
    int zahlen[10] = {0,1,2,3,4,5,6,7,8,9};
    for (int i:zahlen) {
        if (i%2 == 0) continue;
        std::cout << i <<  "\n";
    }
}

using namespace std;


int main(int argc, char** argv) {
    
   std::cout << "-----if-----\n";
   demoIf();
   std::cout << "...switch---\n";
   demoSwitch();
   std::cout << "...while---\n";
   demoWhile();
   std::cout << "...do---\n";
   demoDo();
   std::cout << "...for...\n";
   demoForClassic();
   std::cout << "...for new \n";
   demoForNew();
  
    
    return 0;
}


#include <iostream>
using namespace std;

class Haustier {
    
private:
    unsigned int beine;
public:
    Haustier(unsigned int b):beine(b){
      //  cout << "beine" << beine << endl;
    }
    
    unsigned int anzahleBeine() const {
        return beine;
    }
    
    
    
};


class Katze:public Haustier{
    
public:
    Katze():Haustier(4) {}
        
    void miau() const{
        std::cout << "Muau!\n";
    }
    
};

class Hund: public Haustier {
    
public:
    Hund() : Haustier(4) {}
  
    void wuff() const
    {
        std::cout << "Wuff\n";
    }


};

class Dackel:public Hund
{
public:
    void unterSofa() const {
        std::cout << "Is dunkel hier..\n";
    }
};

class Labrador : public Hund {
public:
    void sabbern() const {
        std::cout << "Der Teppich wäre dann jetzt nass..\n";
    }
};

void printBeine(Haustier const &h)
{
    std::cout << "Beine:  " << h.anzahleBeine();
}

void bellen(Hund const &h){
    h.wuff();
}


int main() {
    
    Katze k;
    Dackel d;
    Labrador l;
    
    std::cout << "Katze : ";
    printBeine(k);
    std::cout << std::endl;
    
    std::cout << "Dackel ";
    printBeine(d);
     std::cout << std::endl;
     
     bellen(l);
    
     d.unterSofa();
     l.sabbern();
    
    return 0;
}
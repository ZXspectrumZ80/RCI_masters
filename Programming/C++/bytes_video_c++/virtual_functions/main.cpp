#include <iostream>
using namespace std;

class Haustier {
    unsigned int beine;
public:
    Haustier(unsigned int b) : beine(b) {}
    
    unsigned int anzahleBeine() const {
        return beine;
    }
    
    virtual void gibLaut() const {
        std::cout << "Hm? Was bin ich denn ?\n";
    }
    
};


class Katze:public Haustier{
    
public:
    Katze():Haustier(4) {}
        
    void gibLaut() const override
    {
        std::cout << "Miau!\n";
    }
    
};

class Hund: public Haustier {
    
public:
    Hund() : Haustier(4) {}
  
    void gibLaut() const
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

//void bellen(Hund const &h){
  //  h.wuff();
//}

void geraeusch(Haustier const &h)
{
    h.gibLaut();
}

int main() {
    
    Katze k;
    Dackel d;
    Labrador l;
    
    std::cout << "Katze : ";
    geraeusch(k);
    std::cout << std::endl;
    
    std::cout << "Dackel ";
    geraeusch(d);
     std::cout << std::endl;
     
     //bellen(l);
    
     //d.unterSofa();
     //l.sabbern();
    
    return 0;
}
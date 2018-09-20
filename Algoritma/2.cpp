#include <iostream>

using namespace std;

int main() {
    int numberOfFibbonaci;
    int term1 = 0; 
    int term2 = 1; 
    int nextTerm = 0;

    cout << "Banyaknya bilangan fibonaci: ";
    cin >> numberOfFibbonaci;

    for (int idx = 1; idx <= numberOfFibbonaci; idx++) {
        switch(idx) {
            case 1 : 
                cout << term1 << " ";
                break;
            case 2:
                cout << term2 << " ";
                break;
            default:
                nextTerm = term1 + term2;
                term1 = term2;
                term2 = nextTerm;
                cout << nextTerm << " ";
                break;
        }
    }
    cout << endl;
    
    return 0;
}
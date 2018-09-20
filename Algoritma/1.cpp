#include <iostream>
#include <cmath>

using namespace std;

int main() {
    int upperBound;

    cin >> upperBound;

    for (int idx = 2; idx <= upperBound; idx++) {
        if (idx == 2)
            cout << idx << " ";
        else if (idx == 3)
            cout << idx << " ";
        else {
            for (int jdx = 2; jdx * jdx <= idx; jdx++) {
                if (idx % jdx == 0)
                    break;
                else if (jdx + 1 > sqrt(idx))
                    cout << idx << " ";
            }
        }
    }
    cout << endl;
    
    return 0;
}
#include <iostream>
#include <string>
#include <algorithm>
#include <cmath>

using namespace std;

int main() {
    string inputUser;

    cin >> inputUser;
    inputUser.erase(remove(inputUser.begin(), inputUser.end(), '.'), inputUser.end());

    for (int idx = 0; idx < inputUser.length(); idx++) {
        int number = inputUser[idx] - '0';
        number *= pow(10, inputUser.length() - 1 - idx);
        cout << number << endl;
    }

    return 0;
}
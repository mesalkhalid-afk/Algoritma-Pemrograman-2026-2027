#include <iostream>
#include <string>
using namespace std;

int main() {
    string nm1,nm2;

    cout << "Masukan nama pertama =";
    getline(cin,nm1);    // sebaris penuh,pengganti gets()
    cout << "Masukkan nama kedua =";
    cin >> nm2;         // cuma satu kata,sama kayak scanf("%s")

    cout << "Selamat datang " << nm1 << '\n';
    cout << "Selamat datang " << nm2 << '\n';
}
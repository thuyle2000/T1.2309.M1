#include <stdio.h>
#include <stdlib.h>
#include <math.h>
// demo lap trinh ham, co gia tri tra ve la 1 so nguyen

/* ham kiem tra 1 so nguyen, co phai la so nguyen to ko ?
    ten ham : isPrime()
    tham so : int n
    gia tri tra ve :  0 khi n la hop so,
                      1 khi n la so nguyen to
  */
int isPrime(int n); // khai bao ham

int main()
{
    system("cls");
    int n;
    printf(" CHUONG TRINH KIEM TRA SO NGUYEN TO \n");

    do {
        printf(" - nhap 1 so nguyen duong bat ky (>1) : ");
        scanf("%d", &n);
    } while (n < 2);

    if (isPrime(n) == 1)    {
        printf("=> [%d] la so nguyen to !\n", n);
    }
    else   {
        printf("=> [%d] la hop so !\n", n);
    }
}


int isPrime(int n)
{
    int r = 1; // gia su n la so nguyen to => r = 1;

    for (int i = 2; i <= sqrt(n); i++)  {
        if (n % i == 0)   {
            // i la uoc so cua n => n ko phai la so nguyen to
            r = 0;
            break; // ket thuc vong lap
        }
    }

    return r;
}
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
// demo lap trinh ham, co gia tri tra ve la 1 so nguyen

/* ham kiem tra 1 so nguyen, co phai la so nguyen to ko ?
    ten ham : isPrime()
    tham so hinh thuc : int n
    gia tri tra ve :  0 khi n la hop so,
                      1 khi n la so nguyen to
  */
char author[] = "FPT-Aptech T1.2309.M1";

int isPrime(int n); // khai bao ham
int main()
{
    system("cls");
    int a;
    printf(" CHUONG TRINH KIEM TRA SO NGUYEN TO \n");
    printf(" tac gia: %s \n", author);

    do {
        printf(" - nhap 1 so nguyen duong bat ky (>1) : ");
        scanf("%d", &a);
    } while (a < 2);

    if (isPrime(a) == 1)    {
        printf("=> [%d] la so nguyen to !\n", a);
    }
    else   {
        printf("=> [%d] la hop so !\n", a);
    }
}


int isPrime(int n)
{
    int r = 1; // gia su n la so nguyen to => r = 1;
    
    // printf("written by: %s\n", author);
    for (int i = 2; i <= sqrt(n); i++)  {
        if (n % i == 0)   {
            // i la uoc so cua n => n ko phai la so nguyen to
            r = 0;
            break; // ket thuc vong lap
        }
    }

    return r;
}
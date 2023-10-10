#include <stdio.h>
#include <stdlib.h>

int main(){
    int a, b;
    system("cls");
    printf(" >> nhap so nguyen thu 1: "); scanf("%d", &a);
    printf(" >> nhap so nguyen thu 2: "); scanf("%d", &b);

    if(a*b>=1000){
        printf(" >> %d*%d (=%d) >=1000  \n", a,b, a*b);
    }
    else{
        printf(" >> %d*%d (=%d) < 1000  \n", a,b, a*b);
    }
}
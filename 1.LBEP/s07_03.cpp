#include <stdio.h>
#include <stdlib.h>

int main(){
    int a, b;
    system("cls");
    printf(" >> nhap so nguyen thu 1: "); scanf("%d", &a);
    printf(" >> nhap so nguyen thu 2: "); scanf("%d", &b);

    int hieu = a-b;
    if(hieu==a){
        printf(" >> hieu so %d-%d (=%d) = so thu 1 \n", a,b, hieu );
    }
    else if(hieu==b){
        printf(" >> hieu so %d-%d (=%d) = so thu 2 \n", a,b, hieu);
    }
    else{
        printf(" >> hieu so %d-%d (=%d) KHONG BANG GIA TRI CUA 1 trong 2 so duoc nhap \n!", a,b, hieu);
    }
}
#include <stdio.h>
#include <stdlib.h>

int main(){
    int a, b, c;
    system("cls");
    printf(" >> nhap so nguyen thu 1: "); scanf("%d", &a);
    printf(" >> nhap so nguyen thu 2: "); scanf("%d", &b);
    printf(" >> nhap so nguyen thu 3: "); scanf("%d", &c);

    int max =(a>b)?a:b;
    max = (max<c)?c:max;

    printf(">> SO LON NHAT: %d \n", max);
}
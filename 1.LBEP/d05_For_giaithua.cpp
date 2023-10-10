#include <stdio.h>
#include <stdlib.h>
int main()
{
    int n;
    system("cls");
    printf("\n - nhap so nguyen n [0-20] : ");
    scanf("%d", &n);
    while (n<0 || n>20){
        printf("nhap lai \n");
        printf("\n - nhap so nguyen n [0-20] : ");
        scanf("%d", &n);
    }
    double giaithua = 1;
    for (int i =1; i<=n; i++){
        giaithua *= i;
    }
    printf("%d! = %.0f",n,giaithua);
    return 0;
}
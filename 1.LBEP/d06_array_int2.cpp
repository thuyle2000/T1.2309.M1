#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");
    int n; // bien chua tong so phan tu cua day fibonacci
    do{
        printf(" - nhap tong so phan tu cua day fibo [3-20]: ");
        scanf("%d", &n);
    }while(n<3 || n>20);

    int fibo[n];  //khai bao mang so nguyen fibo[] co n-phan tu
    fibo[0] = fibo[1] = 1;
    for (int i = 2; i < n; i++)  {
        fibo[i] = fibo[i-1]+fibo[i-2];
    }

    printf("Day so fibonacci %d-phan tu: ",n);
    for (int i = 0; i < n; i++)  {
        printf("%d ", fibo[i]);
    }  
}
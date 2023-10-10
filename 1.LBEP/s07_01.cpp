#include <stdio.h>
#include <stdlib.h>

int main(){
    int a, b;
    system("cls");
    printf(" >> nhap so nguyen thu 1: "); scanf("%d", &a);
    printf(" >> nhap so nguyen thu 2: "); scanf("%d", &b);

    if(a%b==0){
        printf(" >> %d chia het cho %d \n", a,b);
    }
    else{
        printf(" >> %d KHONG chia het cho %d \n", a,b);
    }
}
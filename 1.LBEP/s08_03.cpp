#include <stdio.h>
#include <stdlib.h>

int main(){
    int a, b, c;
    system("cls");
    printf(" >> nhap so nguyen thu 1: "); scanf("%d", &a);
    printf(" >> nhap so nguyen thu 2: "); scanf("%d", &b);
    printf(" >> nhap so nguyen thu 3: "); scanf("%d", &c);

    int max;
    if(a>b){
        max=a;
    }
    else{
        max=b;
    }

    if(max<c){
      max = c;   
    }

    printf(">> SO LON NHAT: %d \n", max);

}
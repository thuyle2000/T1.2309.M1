#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(){
    system("cls");

    int n;
    printf(" - nhap 1 so nguyen bat ky: ");
    scanf("%d", &n);
    if(n>=0){
        printf("=> Can bac 2 cua [%d] = [%.2f]\n",n, sqrt(n) );
    }
    else{
        printf("=> vi n la so am, nen ko the tinh can bac 2 !\n");
    }
}
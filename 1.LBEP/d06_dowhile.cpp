#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");
    printf("DO-WHILE DEMO \n");

    int n=-1;
    do{
        printf(" >> Vui long nhap diem thi [0-100]: ");
        scanf("%d", &n);
    }while (n<0 || n>100);

    if(n >=40){
        printf(" >> Chuc mung, ban da vuot qua ky thi! \n");
    }
    else{
        printf(" >> Xin chia buon, hen gap lai lan sau !\n");
    }
    
}
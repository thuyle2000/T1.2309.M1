#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");
    printf("WHILE DEMO \n");

    int n=-1;

    while (n<0 || n>100)
    {
        printf(" >> Vui long nhap diem thi [0-100]: ");
        scanf("%d", &n);
    }
    if(n >=40){
        printf(" >> Chuc mung, ban da qua mon ! \n");
    }
    else{
        printf(" >> Xin chia buon, hen gap lai lan sau !\n");
    }
    
}
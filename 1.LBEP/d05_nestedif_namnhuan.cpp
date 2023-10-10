#include <stdio.h>
#include <stdlib.h>

int main(){
    system("cls");
    printf("CHUONG TRINH Kiem Tra Nam Nhuan \n");
    int year;
    printf(" - vui long nhap nam muon kiem tra: ");
    scanf("%d", &year);

    if(year%100==0){
        //day la nam the ky: 2000, 2100, 2200 ...
        if(year%400==0){
            printf(" >> %d la nam nhuan the ky !\n", year);
        }
        else{
            printf(" >> %d la nam the ky !\n", year);
        }
    }else{
        if(year%4==0){
            printf(" >> %d la nam nhuan !\n", year);
        }
        else{
            printf(" >> %d la nam thuong !\n", year);
        }
    }
}
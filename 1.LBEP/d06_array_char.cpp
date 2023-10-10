#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");

    char hoTen[31]; // bien chuoi (string) chua toi da 30 ky tu
    char diaChi[51];// bien chuoi [diaChi] chua toi da 50 ky tu

    printf(" - nhap ho ten: "); scanf("%[^\n]", hoTen);
    fseek(stdin,0, SEEK_END);
    printf(" - nhap dia chi: "); scanf("%[^\n]", diaChi);

    printf("\n Xin chao, [%s] ", hoTen);
    printf("\n Hen gap ban tai [%s] ", diaChi);
}
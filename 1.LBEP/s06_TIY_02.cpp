#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");
    printf("Chuong trinh In MA ASCII cua 1 ky tu \n");

    printf(" - vui long nhap 1 ky tu bat ky: ");
    char ch;
    scanf("%c", &ch);
    printf("=> Ky tu duoc nhap : %c \n", ch);
    printf("=> co ma ascii: %d (%X) \n", ch, ch);

}
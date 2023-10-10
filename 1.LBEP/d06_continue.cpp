#include <stdio.h>
#include <stdlib.h>
int main() {
    system("cls");
    int pincode = 12345;
    int password;

    for (int i = 0; i < 5; i++)    {
        printf(">> vui long nhap vao ma pin: ");
        scanf("%d", &password);
        if (password != pincode)  {
            printf("** ERROR: nhap sai lan thu %d ** \n", i + 1);
            continue;
        }
        printf("\n >> Chuc mung, ban da dang nhap thanh cong !\n");
        //return 0; //ket thuc ham main()
        exit(0);
    }

    printf("\n >> Canh bao: he thong dang co nguoi la xam nhap !!!");
}

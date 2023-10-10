#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");

    int pincode = 12345;
    int password;
    int cnt = 0;

    for (int i = 0; i < 5; i++)     {
        printf("** lan nhap thu %d ** \n", i + 1);
        printf(">> vui long nhap vao ma pin: ");
        scanf("%d", &password);
        if (password == pincode)  {
            cnt=1;
            break;
        }
    }

    if (cnt == 0)  {
        printf("\n >> Canh bao: he thong dang co nguoi la xam nhap !!!");
    }
    else {
        printf("\n >> Chuc mung, ban da dang nhap thanh cong !\n");
    }
}

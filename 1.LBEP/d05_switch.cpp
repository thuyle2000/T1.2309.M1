#include <stdio.h>
#include <stdlib.h>

int main()
{
    system("cls");

    printf("CHUONG TRINH tinh phu cap cho nhan vien \n");
    int phuCap = 0;
    char bacLuong;
    printf(">> nhap bac luong (A|B|C): ");
    scanf("%c", &bacLuong);

    switch (bacLuong)
    {
    case 'A':
    case 'a':
        phuCap = 100;
        break;
    case 'B':
    case 'b':
        phuCap = 400;
        break;
    case 'C':
    case 'c':
        phuCap = 1000;
        break;
    default:
        phuCap = 0;
        break;
    }

    printf(">> bac luong [%c] se co muc phu cap: [%d] \n", bacLuong, phuCap);
}
#include <stdio.h>
#include <stdlib.h>

int main()
{
    system("cls");
    char grade;
    int salary, allowance;

    printf(" >> nhap luong co ban : ");     scanf("%d", &salary);
    fseek(stdin, 0, SEEK_END);  //xoa bo dem ban phim, tuong duong lenh (fflush(stdin))
    printf(" >> nhap bac luong [A|B|C...]: ");      scanf("%c", &grade);
    switch (grade)   
    {
    case 'A':
    case 'a':
        allowance = 300;
        break;
    case 'B':
    case 'b':
        allowance = 250;
        break;
    default:
        allowance = 100;
    }
    printf("\n >> Luong cuoi thang: %d \n", salary+allowance);
}
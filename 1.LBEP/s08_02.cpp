#include <stdio.h>
#include <stdlib.h>

int main()
{
    char lang;
    system("cls");
    printf(" >> nhap ky hieu ngon ngu lap trinh [A|B|C|D|F|P|V]: ");
    scanf("%c", &lang);

    switch (lang)
    {
    case 'A':
    case 'a':
        printf("=> ADA");
        break;
    case 'B':
    case 'b':
        printf("=> BASIC");
        break;
    case 'C':
    case 'c':
        printf("=> COBOL");
        break;

    case 'D':
    case 'd':
        printf("=> Dbase 3");
        break;
    case 'F':
    case 'f':
        printf("=> Fortran");
        break;
    default:
        printf("=> Ky hieu Ngon ngu KHONG HOP LE !\n");
    }
}
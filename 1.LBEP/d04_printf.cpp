#include <stdio.h>
#include <stdlib.h>

int main()
{
    system("cls");

    printf("Chao buoi sang. \nHom nay thu 3, ngay 3 thang 10, 2023.\n");

    printf("chuong trinh demo cach su dung ham printf() \n");
    int a = 100, b = 15;
    printf("a= %d,  b= %d\n", a, b);
    printf("\tHe bat phan: a=%o, b=%o \n", a, b);
    printf("\tHe thap luc phan: a=%X, b=%X \n\n", a, b);
    
    float x = 123.4556, y = 3.1415;
    printf("x= %f,  y= %f\n", x, y);
    printf("\t%%e: x= %e,  y= %e\n", x, y);
    printf("\t%%g: x= %g,  y= %g\n\n", x, y);

    char ok='y';
    char name[]="Dao Ngoc Son";
    printf("ok= %c, name=%s \n", ok, name);
}
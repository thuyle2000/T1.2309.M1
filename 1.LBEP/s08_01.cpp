#include <stdio.h>
#include <stdlib.h>

int main()
{
    int x, y;
    system("cls");
    printf(" >> nhap so nguyen thu 1: ");      scanf("%d", &x);
    printf(" >> nhap so nguyen thu 2: ");      scanf("%d", &y);

    if (x < 2000 || x > 3000)     {
        printf(" >> gia tri cua x =  %d \n", x);
    }
    else     {
        printf(" >> gia tri cua so thu 1 khong hop le \n");
    }

    if (y >=100 && y <=500) {
        printf(" >> gia tri cua y =  %d \n", y);
    }
    else  {
        printf(" >> gia tri cua so thu 2 khong hop le \n");
    }
}
#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");
    printf(">> chuong trinh in bang cuu chuong \n");
    int n;
    printf(" - nhap so nguyen bat ky [2-20]: ");
    scanf("%d", &n);

    if (n>=2 && n<=20)
    {
        printf(">> Bang cuu chuong %d \n", n);
        for (int i = 1; i <= 10; i++)
        {
            printf("%2d * %2d = %3d\n", n, i, n * i);
        }
    }else{
        printf(">> LOI: so nhap ko hop le !!! \n");
    }
}
#include <stdio.h>
#include <stdlib.h>
int main()
{
    int n;
    system("cls");
    printf("CHUONG TRINH IN tam giac vuong ngoi sao \n");
    printf("\n - nhap so dong : ");
    scanf("%d", &n);

    for (int i = 0; i < n; i++)
    {
        for (int k = 0; k <=i; k++)
        {
           printf("* ");
        }
        
        printf("\n");
    }
    
}
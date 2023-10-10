#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");

    int n;
    printf("CHUONG TRINH IN hinh vuong ngoi sao \n");
    printf("\n - nhap so dong : ");
    scanf("%d", &n);

    for (int i = 0; i < n; i++)
    {
        for (int k = 0; k < n; k++)
        {
            printf("* ");
        }
        printf("\n");  //xuong hang
    }
    
}
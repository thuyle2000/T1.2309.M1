#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");
    printf("nhap so dong cua bang cong 2 so nguyen: ");
    int n ;
    scanf("%d", &n);

    for (int i=n, j=1; i >=1 ; i--, j++)
    {
        printf("%2d + %2d = %3d\n", i, j, i+j);
    }
    
}
#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");

    int fibonacci[] = {1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144};
    int n = sizeof(fibonacci) / sizeof(int);
    //n = sizeof(fibonacci) / sizeof(fibonacci[0]);
    
    printf("Day so fibonacci: ");
    for (int i = 0; i < n; i++)
    {
        printf("%d ", fibonacci[i]);
    }

}
#include <stdio.h>
#include <stdlib.h>

// demo con tro ket hop voi mang 1 chieu
int main()
{
    system("cls");

    int a[] = {12, 5, 60, 70, 4, 9, 15, 100, 88};
    int n = sizeof(a) / sizeof(int); // n = tong so phan tu cua mang a[]

    printf("\t mang so nguyen a : ");
    for (int i = 0; i < n; i++)
    {
        printf("%4d ", a[i]);
    }

    // sap xep lai thu tu cac phan tu trong mang a[] tu thap->cao
    int tam = 0;
    for (int i = 0; i < n - 1; i++)
    {
        for (int k = i; k < n; k++)
        {
            if (a[i] > a[k])
            {
                tam = a[i];
                a[i] = a[k];
                a[k] = tam;
            }
        }
    }

    printf("\n mang a[] sau khi duoc xep thu tu: \n");
    for (int i = 0; i < n; i++)
    {
        printf("%4d ", a[i]);
    }

    printf("\n ap dung con tro, duyet mang a[]: \n");
    int *p = a;
    for (int i = 0; i < n; i++)
    {
        printf("%4d ", *(p+i) );
    }
}
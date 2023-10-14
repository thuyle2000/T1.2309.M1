#include <stdio.h>
#include <stdlib.h>

void exchange(int a, int b);
int main()
{
    system("cls");

    int a, b;
    printf("- nhap so nguyen a: ");
    scanf("%d", &a);
    printf("- nhap so nguyen b: ");
    scanf("%d", &b);

    exchange(a,b);
    printf("\n >> Trong ham main(), sau khi goi exchange(): a=%d, b=%d \n", a, b);
}

// ham hoan doi gia tri cua 2 tham so a va b
void exchange(int a, int b)
{
    int tam;
    tam = a;
    a = b;
    b = tam;

    printf("\n Trong ham exchange: a=%d, b=%d \n", a, b);
}
#include <stdlib.h>
#include <stdio.h>
int main()
{
    system("cls");

    int a, b, c, sum;
    printf("\n nhap 3 so bat ky (moi so cach nhau bang khoang trang): ");
    scanf("%d %d %d", &a, &b, &c);
    sum = a + b + c;
    printf("\n Sum = %d", sum);
    printf("\n %d + %d + %d = %d\n", a, b, c, sum);
}
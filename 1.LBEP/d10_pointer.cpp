#include <stdio.h>
#include <stdlib.h>
int main()
{
    int x = 10;
    float y = 3.1415;
    char ch = 'y';

    int *p1 = &x;
    float *p2 = &y;
    char *p3 = &ch;

    system("cls");
    printf(" x = %d, address = %X \n", x, &x);
    printf(" y = %.2f, address = %X \n", y, p2);
    printf(" ch = %c, address = %X \n", ch, p3);

    // thay gia tri cua x = 20, y = 7.89; ch = 'n' bang pp gian tiep
    *p1 = 20;
    *p2 = 7.89;
    *p3 = 'n';

    //in lai gia tri cua x, y va ch
    printf("\n\tsau khi thay doi gian tiep bang con tro: \n");
    printf(" x = %d, address = %X \n", x, &x);
    printf(" y = %.2f, address = %X \n", y, p2);
    printf(" ch = %c, address = %X \n", ch, p3);
}
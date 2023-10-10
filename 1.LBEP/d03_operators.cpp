#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");

    int a=7, b=18, c=21;
    printf("a= %d, b=%d, c=%d \n", a,b,c); 
    printf("b++ = %d \n", b++);
    printf("++b = %d \n", ++b);
    printf("=============\n");

    printf("%d + %d = %d \n", a, b, a+b);
    printf("%d - %d = %d \n", a, b, a-b);
    printf("%d * %d = %d \n", a, b, a*b);
    printf("%d / %d = %d \n", a, b, a/b);
    printf("%d / %d = %d \n", b, a, b/a);
    printf("(float)%d / %d = %f \n", b, a, (float)b/a);
    printf("%d %% %d = %d \n", b, a, b%a);

    printf("======================\n");
    printf("bitwise and : %d & %d = %d \n", b, a, b&a);
    printf("bitwise xor : %d ^ %d = %d \n", b, a, b^a);
    printf("bitwise or  : %d | %d = %d \n", b, a, b|a);

    printf("-8*4%%2-3 = %d\n", -8*4%2-3);
}
#include <stdio.h>
#include <stdlib.h>

// demo nhap 1 so hop le bang vong lap do-while
int main()
{

    // nhap 1 so trong khoang 1-10
    int n1;
    do
    {
        printf(" - vui long nhap 1 so [1-10]: ");
        scanf("%d", &n1);
    } while (n1 < 1 || n1 > 10); // dk de vong lap tiep tuc thi hanh

    printf("=> n1 = %d \n", n1);

    // nhap 1 so <=100
    int n2;
    while (1==1)  //1==1=>true
    {
        printf(" - vui long nhap 1 so [<=100]: ");
        scanf("%d", &n2);
        if(n2<=100){
            break;  // ket thuc vong lap
        }
    }
    printf("=> n2 = %d \n", n2);
}
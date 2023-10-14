#include <stdio.h>
#include <stdlib.h>
#include <math.h>

// khai bao ham GPTB2()
int GPTB2(int a, int b, int c, double *x1, double *x2);

int main()
{
    int a, b, c;
    double x = -5, y = -5;

    system("cls");
    printf("Chuong trinh Giai Phuong Trinh bac 2: ax2 + bx + c = 0 \n");
    printf(" - nhap he so a: ");
    scanf("%d", &a);
    printf(" - nhap he so b: ");
    scanf("%d", &b);
    printf(" - nhap he so c: ");
    scanf("%d", &c);

    int kq = GPTB2(a, b, c, &x, &y);

    if (kq == -1)
    {
        printf(" >> PT vo nghiem ! \n");
    }
    else if (kq == 0)
    {
        printf(" >> PT co nghiem kep: x1=x2=%.2f \n", x);
    }
    else
    {
        printf(" >> PT co 2 nghiem: x1=%.2f, x2=%.2f \n", x, y);
    }
}

/*dinh nghia noi dung cua ham giai phuong trinh bac 2:
    ten ham : GPTB2
    tham so hinh thuc : so nguyen a, b, c; so thuc x1 , x2
    gia tri tra ve :
        -1 khi PT vo nghiem
        0  khi PT co nghiem kep x1 = x2
        1  khi PT co 2 nghiem phan biet x1, x2

    => prototype cua ham :
       int GPTB2(int a, int b, int c, double x1, double x2)
*/
int GPTB2(int a, int b, int c, double *x1, double *x2)
{
    double delta = b * b - 4 * a * c;
    if (delta < 0)
    {
        return -1;
    }
    else if (delta == 0)
    {
        *x1 = *x2 = -b / (2.0 * a);
        return 0;
    }
    else
    {
        *x1 = (-b - sqrt(delta)) / (2 * a);
        *x2 = (-b + sqrt(delta)) / (2 * a);
        return 1;
    }
}
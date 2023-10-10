#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(){
    system("cls");

    printf("GIAI PHUONG TRINH BAC 2, dang thuc ax2+bx+c =0 \n");

    int a,b,c;
    float delta, x1, x2;

    printf("- nhap he so a: "); scanf("%d", &a);
    printf("- nhap he so b: "); scanf("%d", &b);
    printf("- nhap he so c: "); scanf("%d", &c);

    delta = b*b-4*a*c;
    if(delta>0){
        x1 = -b/(2*a) - sqrt(delta);
        x2 = -b/(2*a) + sqrt(delta);
        printf("phuong trinh co 2 nghiem phan biet: ");
        printf("x1 = %.2f, x2= %.2f \n", x1,x2); 
    }
    else if (delta==0)  {
        x1=x2 = -b/(2*a);
        printf("phuong trinh co nghiem kep: ");
        printf("x1 = x2 %.2f \n", x1); 
    }
    else{
        printf("phuong trinh vo nghiem! \n");
    }
}
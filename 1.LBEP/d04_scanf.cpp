#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");
    printf("\n Chuong trinh demo ve ham scanf() \n");
    int a, b;
    float x, y;
    char yesno;
    char names[80], address[80];

    printf("- nhap 2 so nguyen bat ky:");
    scanf("%d%d", &a, &b);
    printf("a = %d, b=%d \n", a, b);

    printf("- nhap so thuc thu 1: ");
    scanf("%f", &x);
    printf("- nhap so thuc thu 2: ");
    scanf("%f", &y);
    printf("\t => x / y = %f\n", x / y);

    printf("\n- ten ban la gi ? ");
    scanf("%s", names);
    printf("\t => Xin chao, %s !\n", names);
    // fflush(stdin);  //xoa bo dem ban phim
    fseek(stdin,0, SEEK_END);

    printf("\n- nha ban o dau ? ");
    // scanf("%[^\n]s", address);
    gets(address);
    printf("\t => WOW [%s] ah, toi ko biet!\n", address);

    fflush(stdin);  //xoa bo dem ban phim
    printf("\n- ban co muon tiep tuc chuong trinh nua ko (y/n) ? ");
    // scanf("%c", &yesno);
    yesno = getchar();
    printf("\t => ban da chon [%c] \n", yesno);
}
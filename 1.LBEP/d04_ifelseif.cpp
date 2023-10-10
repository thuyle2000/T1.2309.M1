#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");

    char hoten[31];
    int diemKQ;

    printf(" - nhap ho ten cua ban: ");
    gets(hoten); // gets() cho phep nhap chuoi co chua khoang trang

    printf(" - nhap diem ket qua thi [0-100]: ");
    scanf("%d", &diemKQ);

    printf(" >> chao %s, ban dat duoc diem ", hoten);
    if (diemKQ >= 0 && diemKQ <= 100)
    {
        if (diemKQ >= 90)
        {
            printf(" A+ ");
        }
        else if (diemKQ >= 80)
        {
            printf(" A ");
        }
        else if (diemKQ >= 70)
        {
            printf(" B+ ");
        }
        else if (diemKQ >= 60)
        {
            printf(" B ");
        }
        else if(diemKQ >=40){
            printf(" C ");
        }
        else{
            printf(" FAIL !");
        }
    }
    else
    {
        printf("ko hop le !!!");
    }
}
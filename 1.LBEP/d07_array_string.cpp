#include <stdio.h>
#include <stdlib.h>
int main(){
    system("cls");

    int n=5;
    do{
        printf(">> nhap so luong sinh vien [3-10]: "); 
        scanf("%d" , &n);
    }while(n<3 || n>10);
    fseek(stdin, 0, SEEK_END);

    //khai bao mang ds[] chua ho ten cua n-sinh vien, moi chuoi ho ten dai toi da 30 kytu 
    char ds[n][31];

    printf(">> nhap ho ten sinh vien \n");
    for (int i = 0; i < n; i++)    {
        printf(" - sinh vien thu %d: ", i+1); gets(ds[i]);
    }
    
    printf("\nDanh sach sinh vien \n");
    for (int i = 0; i < n; i++)    {
        printf("%2d. %s \n", i+1, ds[i]);
    }
}
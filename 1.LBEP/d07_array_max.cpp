#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");
    int n;

    do
    {
        printf("- nhap tong so phan tu [3-20]: ");
        scanf("%d", &n);
    } while (n < 3 || n > 20);

    int a[n]; // khai bao mang a[] chua n-so nguyen
    for (int i = 0; i < n; i++)
    {
        printf("\t nhap phan tu a[%d]: ", i);
        scanf("%d", &a[i]); // nhap du lieu vo phan tu, co index-i, trong mang a[]
    }

    /*  
    bien min, max se chua gia tri lon nhat, nho nhat trong mang a
    bien total se chua tong gia tri cua cac phan tu trong mang a
    */ 
    int max, min, total;
    max = min = total = a[0];
    for(int i=1; i<n; i++){
        max = (a[i]>max) ? a[i]: max;
        min = (a[i]<min) ? a[i]: min;
        total += a[i];
    }

    //in lai day so vua nhap
    printf(" >> day so : ");
    for (int i = 0; i < n; i++)
    {
        printf("%d  ",a[i]);
    }
    printf("\n >> so lon nhat: %d", max);
    printf("\n >> so nho nhat: %d", min);
    printf("\n >> gia tri binh quan : %.2f", (float)total/n);
}
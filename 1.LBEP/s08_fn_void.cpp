#include <stdio.h>
#include <stdlib.h>

// khai bao cac ham da dinh nghia trong file chuong trinh nay
void print(int a[], int n); // prototype cua ham print()

// demo lap trinh ham - ko co gia tri tra ve
int main()
{
    system("cls");
    int a[] = {12, 9, 20, 24, 8, 90, 100, 72, 63};
    int n = sizeof(a) / sizeof(int); // n chua tong so phan tu cua mang

    // goi ham print() de in moi dung mang a[] ra man hinh
    printf(">> noi dung cua mang a[]: \n");
    print(a, n);

    // dem cac so chan trong mang a[]
    int count = 0;
    for (int i = 0; i < n; i++)
    {
        if (a[i] % 2 == 0)
        {
            count++;
        }
    }//ket thuc vong FOR
    printf("=> Co [%d] so chan trong day so \n", count);
}

/*
  ham in ra noi dung cua mang so nguyen co n-phan tu
  print : ten ham
  a[], n: tham so hinh thuc (formal argument): bien cuc bo
  void  : ham ko co gia tri tra ve cho chuong trinh goi
*/
void print(int a[], int n)
{
    for (int i = 0; i < n; i++)
    {
        printf("%d  ", a[i]);
    }
}

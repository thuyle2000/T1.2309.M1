#include <stdio.h>
#include <stdlib.h>
// chuong trinh nhap 1 day so vo array, 
// sau do dao nguoc vi tri cac phan tu trong array
int main(){
    system("cls");
    printf("Chuong trinh dao nguoc vi tri cac phan tu trong mang \n");

    int n = 5;
    int a[n];

    //1. nhap du lieu vo mang a[]
    for (int i = 0; i < n; i++)
    {
        printf("- nhap so thu %d: ", i+1 ); scanf("%d", &a[i]);
    }
    
    //2. in ra man hinh, day so vua duoc nhap
    printf("\n Day so vua nhap: ");
    for (int i = 0; i < n; i++)
    {
        printf("%4d ", a[i]);
    }

    //3. dao nguoc cac phan tu trong mang a[]
    int tam;
    for (int i = 0; i <= n/2; i++)
    {
        tam = a[i];
        a[i] = a[n-1-i];
        a[n-1-i]=tam;
    }

    //4. in ra man hinh, day so sau khi dao nguoc cac phan tu
    printf("\n Day so sau khi dao nguoc cac phan tu: ");
    for (int i = 0; i < n; i++)
    {
        printf("%4d ", a[i]);
    }
}
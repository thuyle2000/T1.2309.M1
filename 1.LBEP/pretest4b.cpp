#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void Q1();
void Q2();

int main()
{
    system("cls");
    int option = 0;

    // menu chay lien tuc, cho den khi user chon chuc nang ket thuc
    while (1 == 1)
    {
        printf("\n");
        printf("**************************************************\n");
        printf("* Selecting appropriate action:                  *\n");
        printf("* 1. Question 1                                  *\n");
        printf("* 2. Question 2                                  *\n");
        printf("* 3. Quit program                                *\n");
        printf("**************************************************\n");
        printf("\t plz input your choice [1-3]: ");
        scanf("%d", &option);

        switch (option)
        {
        case 1:
            Q1();
            break;
        case 2:
            Q2();
            break;
        case 3:
            printf("\n Thank you !!! \n");
            return 0;
        default:
            printf(" >> ERROR : wrong choice !!! \n\n");
            break;
        }
    }
}

// ham quan ly danh sach cac quoc gia
struct COUNTRY
{
    char name[31], capital[31];
    int area;
};
void Q2()
{
    system("cls");

    int n;
    while (1 == 1)
    {
        printf("- Enter the number of countries [3-10]: ");
        scanf("%d", &n);
        if (n >= 3 && n <= 10)
        {
            break;
        }
    }

    // khai bao mang ds[] chua n-phan tu co cau truc [struct COUNTRY]
    struct COUNTRY ds[n];

    // vong lap nap du lieu cho n-quoc gia
    printf("\n Please enter the data for ");
    for (int i = 0; i < n; i++)
    {
        fseek(stdin, 0, SEEK_END);
        printf("\n Country no %d: \n", i + 1);
        printf(" - name: ");
        gets(ds[i].name);
        printf(" - capital: ");
        gets(ds[i].capital);
        printf(" - area: ");
        scanf("%d", &ds[i].area);
    }

    // vong lap in danh sach cac quoc gia
    printf("\n\n List of countries \n");
    for (int i = 0; i < n; i++)
    {
        printf("%-20s, %-20s, %6d \n", ds[i].name, ds[i].capital, ds[i].area);
    }

    // xep thu tu danh sach cac quoc gia theo cot ten a-z
    struct COUNTRY tam;
    for (int i = 0; i < n - 1; i++)
    {
        for (int k = i + 1; k < n; k++)
        {
            if (strcmp(ds[i].name, ds[k].name) > 0)
            {
                tam = ds[i];
                ds[i] = ds[k];
                ds[k] = tam;
            }
        }
    }

    // vong lap in danh sach cac quoc gia sau khi xep thu tu
    printf("\n\n List of countries (after sorted by name) \n");
    for (int i = 0; i < n; i++)
    {
        printf("%-20s, %-20s, %6d \n", ds[i].name, ds[i].capital, ds[i].area);
    }

    // nhap ten quoc gia => in ra thu do va dien tich
    char tenQG[31];
    printf("\n - input country name:  ");
    fseek(stdin, 0, SEEK_END);
    gets(tenQG);
    int cnt = 0;
    for (int i = 0; i < n; i++)
    {
        if (strstr(ds[i].name, tenQG))
        {
            printf("%-20s, %-20s, %6d \n", ds[i].name, ds[i].capital, ds[i].area);
            cnt++;
        }
    } // ket thuc FOR

    if (cnt == 0)
    {
        printf("\n\t >> NOT FOUND !\n");
    }
}

void Q1()
{
    int n1, n2;

    system("cls");

    printf(" - Enter an the first number N1 (<100) : ");
    scanf("%d", &n1);

    printf(" - Enter an the second number N2 (<10) : ");
    scanf("%d", &n2);

    int total = 0;
    printf("Multiples of %d ( <=%d ) are: ", n2, n1);
    for (int i = n2; i <= n1; i += n2)
    {
        printf("%4d ", i);
        total += i;
    }
    printf("\n => Sum of them are: %d \n", total);
}
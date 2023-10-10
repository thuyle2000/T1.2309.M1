#include <stdio.h>
#include <stdlib.h>

int main()
{
    system("cls");
    printf("\n Chuong trinh demo ham printf() \n");

    char sv1[] = "Son Phi Long";
    float f1 = 89.95;
    char sv2[] = "Nguyen Nhat Khanh";
    float f2 = 49.89;
    char sv3[] = "Nguyen thi Mai Trinh";
    float f3 = 98.75;
    char sv4[] = "Nguyen thi Yen Lien";
    float f4 = 100;

    int sott = 1;
    printf("\n Bang Ket Qua Thi \n");
    printf("=====================\n");
    printf("%d.\t %s. \t %f \n", sott++, sv1, f1);
    printf("%d.\t %s. \t %f \n", sott++, sv2, f2);
    printf("%d.\t %s. \t %f \n", sott++, sv3, f3);
    printf("%d.\t %s. \t %f \n", sott++, sv4, f4);

    sott = 1;
    printf("\n BANG KET QUA THI \n");
    printf("=====================\n");
    printf("%3s. %-25s. %-8s \n", "stt", "ho va ten", "diem KQ");
    printf("---------------------------------------\n");

    printf("%3d. %-25s. %12f \n", sott++, sv1, f1);
    printf("%3d. %-25s. %12f \n", sott++, sv2, f2);
    printf("%3d. %-25s. %12f \n", sott++, sv3, f3);
    printf("%3d. %-25s. %12f \n", sott++, sv4, f4);

    sott = 1;
    printf("\n\n BANG KET QUA THI \n");
    printf("=====================\n");
    printf("%3s. %-25s. %-8s \n", "stt", "ho va ten", "diem KQ");
    printf("---------------------------------------\n");

    printf("%3d. %-25s. %06.2f \n", sott++, sv1, f1);
    printf("%3d. %-25s. %06.2f \n", sott++, sv2, f2);
    printf("%3d. %-25s. %06.2f \n", sott++, sv3, f3);
    printf("%3d. %-25s. %06.2f \n", sott++, sv4, f4);
}
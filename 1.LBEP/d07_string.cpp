#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main()
{
    system("cls");
    printf(" DEMO Cac Ham xu ly Chuoi \n");

    // khai bao 3 chuoi co the chua toi da 80 ky tu
    char s1[81], s2[81], s3[81];
    char ch;

    printf(">> nhap chuoi s1: ");
    scanf("%[^\n]", s1);
    fseek(stdin, 0, SEEK_END);
    printf(">> nhap chuoi s2: ");
    scanf("%[^\n]", s2);
    fseek(stdin, 0, SEEK_END);

    strcpy(s3, s1); // gan s3 = s1
    printf("=> after strcpy(s3, s1), s3 = %s \n", s3);

    strcat(s3, s2); // gan s3 = s3+s2
    printf("=> after strcat(s3, s2), s3 = %s \n", s3);

    int n1 = strlen(s1); // dem so ky tu (bao gom khoang trang) cua s1
    int n2 = strlen(s2); // dem so ky tu cua chuoi s2
    int n3 = strlen(s3); // tinh do dai cau chuoi s3
    printf("\n=> do dai chuoi s1=%d, s2=%d, s3=%d \n", n1, n2, n3);

    int d1 = strcmp(s1, s2); // so sanh chuoi s1 voi s2 (tru ma ascii)
    int d2 = strcmp(s1, s3); // so sanh chuoi s1 voi s3 (tru ma ascii)
    int d3 = strcmp("abc", "abc");
    printf("\n=> strcmp(s1, s2) = %d", d1);
    printf("\n=> strcmp(s1, s3) = %d", d2);
    printf("\n=> strcmp('abc', 'abc') = %d", d3);

    printf("\n\n Ket qua tim kiem: \n");
    printf("- nhap 1 ky tu bat ky: ");
    scanf("%c", &ch);
    if (strchr(s1, ch))   {
        printf("=> tim thay [%c] trong chuoi [%s] \n", ch, s1);
    }
    else {
        printf("=> KHONG tim thay [%c] trong chuoi [%s] \n", ch, s1);
    }

    //tim chuoi trong chuoi
    if (strstr(s1, s2))  {
        printf("=> tim thay [%s] trong chuoi [%s] \n", s2, s1);
    }
    else  {
        printf("=> KHONG tim thay [%s] trong chuoi [%s] \n", s2, s1);
    }

    if (strstr(s3, s2))  {
        printf("=> tim thay [%s] trong chuoi [%s] \n", s2, s3);
    }
    else  {
        printf("=> KHONG tim thay [%s] trong chuoi [%s] \n", s2, s3);
    }
}
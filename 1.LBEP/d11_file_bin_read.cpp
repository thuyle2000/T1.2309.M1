#include <stdio.h>
#include <stdlib.h>
// demo doc file nhi phan (binary file)

int main()
{
    system("cls");

    char fname[] = "thang-10.txt";
    FILE *f;

    // 1. open file co ten chua trong bien [fname] de doc noi dung
    f = fopen(fname, "rb");

    // 2. doc du lieu tu file
    char line[161];
    int n = sizeof(line);
    int cnt = 1;

    // fseek(f,0, SEEK_END);
    // long fsize = ftell(f);
    // printf("file size = %d \n", fsize);
    // rewind(f);
   
    while (feof(f)== false)
    {
        // doc n bytes du lieu tu tap tin vo buffer line
        fread(line, n, cnt, f);
        printf("%s \n",  line);
    }

    // 3. dong file
    fclose(f);

    printf("\n Hoan tat doc file (Binary) !\n");
}
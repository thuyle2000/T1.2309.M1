#include <stdio.h>
#include <stdlib.h>
//demo doc file van ban (text file)

int main(){
    system("cls");

    char fname[] = "thang-10.txt";
    FILE *f;

    //1. open file co ten chua trong bien [fname] de doc noi dung
    f = fopen(fname, "r");

    //2. doc du lieu tu file
    char line[161];
    int n = sizeof(line);
    
    while (feof(f)== false)
    {
        //doc tung dong van ban trong tap tin
        fgets(line, n, f);
        printf("%s", line);
    }

    //3. dong file
    fclose(f);

    printf("\n Hoan tat doc file !\n");
}
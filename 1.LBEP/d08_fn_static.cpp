#include <stdio.h>
#include <stdlib.h>

/** Demo ve cach hoat dong cua bien static */

void count_a(); //khai bao ham count_a()
void count_b(); //khai bao ham count_b()
int main(){
    system("cls");

    count_a(); count_a(); count_a(); printf("\n");
    count_b(); count_b(); count_b();
}

//ham dem so thu tu bat dau tu n - dem 10 lan va in ra cac so dem
void count_a(){
    int n = 0;
    printf("\n *** Dem so thu tu (count_a) *** : ");
    for (int i = 0; i < 10; i++)
    {
        printf("%3d ", n);
        n++;
    }
}

//ham dem so thu tu bat dau tu n - dem 10 lan va in ra cac so dem
void count_b(){
    static int n=0;
    printf("\n *** Dem so thu tu (count_b) *** : ");
    for (int i = 0; i < 10; i++)
    {
        printf("%3d ", n);
        n++;
    }
    
}
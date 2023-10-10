#include <stdio.h>
#include <stdlib.h>
int main()
{
    system("cls");
    int principal, period;
    float rate, si;
    principal = 1000;
    period = 3;
    rate = 8.5;
    si = principal * period * rate / 100;
    printf("$ tien goc: %d \n", principal);
    printf(" - lai suat: %f %% \n", rate);
    printf(" - thoi gian goi: %d nam \n", period);
    printf("$ Loi sau %d nam: %f \n", period, si);
}
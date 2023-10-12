#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//chuong trinh dem cac nguyen am trong 1 chuoi ky tu -- version 2
int main(){
    char s[81];
    int count=0;

    system("cls");
    printf("*** chuong trinh dem cac ky tu nguyen am ***\n ");
    printf("- nhap chuoi ky tu bat ky : ");
    gets(s);

    
    int len = strlen(s);
    
    for (int i = 0; i < len; i++)
    {
        switch (s[i])
        {
        case 'A': case 'a':
        case 'E': case 'e':
        case 'I': case 'i':
        case 'O': case 'o':
        case 'U': case 'u':
            count++;
            break;
        }

    }//ket thuc FOR
    printf("=> so ky tu nguyen am trong chuoi [%s] = %d \n", s, count);
    

}

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//chuong trinh dem cac nguyen am trong 1 chuoi ky tu
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
        // printf("%c ,", s[i]);
        if(s[i]=='a'||s[i]=='e'||s[i]=='o'||s[i]=='u'||s[i]=='i'||s[i]=='A'|| s[i]=='E'||s[i]=='O'||s[i]=='U'||s[i]=='I'){

            count++;
        }
    }//ket thuc FOR
    printf("=> so ky tu nguyen am trong chuoi [%s] = %d \n", s, count);
    

}

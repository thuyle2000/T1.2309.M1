#include <stdio.h>
#include <stdlib.h>

int main(){
    //demo do-while
    printf("demo do-while \n");

    int n=2;  // (n<1) =>false, (n<=1) => true 

    do{
        printf(" hello, 3 anh ! \n");
        n++;
    }while(n<1);

    printf("finished.");

}
#include <stdio.h>
#include <stdlib.h>
//demo ghi file van ban (text file)

int main(){
    char fname[] = "thang-10.txt";
    FILE *f;

    //1. open file co ten chua trong bien [fname] de ghi ten cac bai hat
    f = fopen(fname, "w");

    //2. them du lieu vo file
    fputs(" Cac bai hat thang 10 \n", f);
    fputs(" 1. A loi \n", f);
    fputs(" 2. Cat doi noi sau \n", f);
    fputs(" 3. Ban doi \n", f);
    fputs(" 4. Tat ca hoac ko la gi ca \n", f);
    fputs(" 5. Danh doi \n", f);
    fputs(" 6. Can loi ! \n", f);
    fputs(" 7. jngle bell ! \n", f);


    //3. dong file
    fclose(f);

    printf("Ghi file thanh cong !\n");
}
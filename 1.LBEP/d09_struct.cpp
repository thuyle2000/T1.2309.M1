#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//chuong trinh demo ve bien structure

/* 
dinh nghia kieu du lieu 'cau truc sinh vien' (struct STUDENT), bao gom cac du lieu thanh phan:
    - ma so, ho ten (chuoi ky tu)
    - nam sinh, diem cuoi khoa (so nguyen)
*/
struct STUDENT
{
    char id[21], name[31];
    int yob, mark;
};
void print(struct STUDENT sv);
int main(){
    system("cls");

    //khai bao bien sv1, sv2 co kieu [struct STUDENT]
    struct STUDENT sv1 = {"sv01","son phi long", 2006, 70};
    struct STUDENT sv2;
    strcpy(sv2.id , "sv02");
    strcpy(sv2.name , "nguyen nhat khanh");
    sv2.yob = 2008;
    sv2.mark = 80;

    //tiep tuc khai bao bien sv3 co kieu [struct STUDENT]
    struct STUDENT sv3;
    printf("nhap ma so sv: "); scanf("%s", sv3.id);
    fseek(stdin, 0, SEEK_END);
    printf("nhap ho ten: "); scanf("%[^\n]", sv3.name);
    printf("nhap nam sinh: "); scanf("%d", &sv3.yob);
    printf("nhap diem cuoi khoa: "); scanf("%d", &sv3.mark);

    // in noi dung cua sv1 va sv2, sv3
    print(sv1);
    print(sv2);
    print(sv3);

}

//ham in noi dung cua bien cau truc, co kieu [struct STUDENT]
void print(struct STUDENT sv){
    printf("Thong tin sinh vien: ");
    printf("%s, %s, %d, %d \n", sv.id, sv.name, sv.yob, sv.mark);
}
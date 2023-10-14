#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct STUDENT{
    char id[11], name[31];
    int english, math, science;
};

//dat ten cho [struct STUDENT] la [SINHVIEN]
typedef struct STUDENT SINHVIEN; 

void Q2();

int main(){
    system("cls");
    Q2();
}


//chuong trinh ham Q2(), quan ly danh sach cac doi tuong sinh vien
void Q2(){
    int n;
    while(1){
        printf("ban muon quan bao nhieu sv [3-10]: ");
        scanf("%d", &n);
        if(n>=3 && n<=10) {
            break;  // nhap dung -> thoat vong lap
        }
    }

    //khai bao 1 mang co ten la [ds], chua n-doi tuong sinh vien
    SINHVIEN ds[n];

    //vong lap nhap thong tin chi tiet cua n-doi tuong sinh vien
    for (int i = 0; i < n; i++)
    {
        fseek(stdin, 0, SEEK_END);
        printf("\t nhap thong tin cua sinh vien thu %d:\n", i+1);
        printf(" - id: "); gets(ds[i].id);
        printf(" - ho ten: "); gets(ds[i].name);
        printf(" - diem khoa hoc: "); scanf("%d", &ds[i].science);
        printf(" - diem toan: "); scanf("%d", &ds[i].math);
        printf(" - diem tieng anh: "); scanf("%d", &ds[i].english);
    }

    //vong lap xuat bang ds sinh vien
    int total = 0;
    printf("\n +++ Bang danh sach sinh vien +++ \n");
    for (int i = 0; i < n; i++)
    {
        printf(" so tt: %d \n", i+1);
        printf("\t ma so: %s\n", ds[i].id);
        printf("\t ho ten: %s\n", ds[i].name);
        printf("\t diem khoa hoc  : %3d\n", ds[i].science);
        printf("\t diem toan      : %3d\n", ds[i].math);
        printf("\t diem tieng anh : %3d\n", ds[i].english);
        total = ds[i].english+ds[i].math+ds[i].science;
        printf("\t diem tong      : %3d\n", total);
        printf("\t diem binh quan : %.2f\n", total/3.0);      
    }
}
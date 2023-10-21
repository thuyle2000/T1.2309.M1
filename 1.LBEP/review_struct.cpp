#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// structure MEMBER mo ta cau truc thanh vien, bao gom hoten, email, ngay sinh nhat (struct DATE)

// struct mo ta cau truc thoi gian [ngay/thang/nam]
struct DATE
{
    int dd, mm, yy;
};

// struct mo ta cau truc thanh vien
struct MEMBER
{
    char email[31], name[31];
    struct DATE dob;
};

void QLTV(); // prototype cua ham quan ly thanh vien
int main()
{
    system("cls");
    QLTV();
}

void QLTV()
{
    system("cls");
    int n;

    // vong lap nhap so luong thanh vien muon quan ly trong chuong trinh
    while (1 == 1)
    {
        printf(" - nhap so luong t.vien muon quan ly [3-10]: ");
        scanf("%d", &n);
        if (n >= 3 && n <= 10)
        {
            break;
        }
    }

    // khai bao bien mang dstv[] chua n-thanh vien
    struct MEMBER dstv[n];

    // vong lap FOR nhap du lieu cua n-thanh vien
    printf("*** nhap thong tin thanh vien **** \n");
    for (int i = 0; i < n; i++)
    {
        fseek(stdin, 0, SEEK_END);
        printf(" thanh vien thu %d: \n", i + 1);
        printf(" - nhap ho ten: ");
        scanf("%[^\n]", dstv[i].name);
        fseek(stdin, 0, SEEK_END);
        printf(" - nhap email : ");
        scanf("%[^\n]", dstv[i].email);
        fseek(stdin, 0, SEEK_END);
        printf(" - nhap ngay sinh nhat: \n");
        printf("\t ngay  [1-31]: ");
        scanf("%d", &dstv[i].dob.dd);
        printf("\t thang [1-12]: ");
        scanf("%d", &dstv[i].dob.mm);
        printf("\t nam  (>1900): ");
        scanf("%d", &dstv[i].dob.yy);
    }

    // in ra danh sach thanh vien
    printf("\n Danh sach thanh vien \n");
    for (int i = 0; i < n; i++)
    {
        printf("%2d. %-20s %-20s %02d-%02d-%d \n", i + 1, dstv[i].name, dstv[i].email, dstv[i].dob.dd, dstv[i].dob.mm, dstv[i].dob.yy);
    }

    // in ra danh sach thanh vien theo ten yeu cau
    char ten[31];
    fseek(stdin, 0, SEEK_END);
    printf("\n - nhap ten thanh vien muon tim: ");
    scanf("%[^\n]", ten);

    int cntTen = 0;
    for (int i = 0; i < n; i++)
    {
        if (strstr(dstv[i].name, ten))
        {
            printf(" %-20s %-20s %02d-%02d-%d \n", dstv[i].name, dstv[i].email, dstv[i].dob.dd, dstv[i].dob.mm, dstv[i].dob.yy);

            cntTen++;
        }
    } //ket thuc FOR

    if(cntTen==0){
        printf(" >>> Ko tim thay thanh vien co ten [%s]!!! \n\n", ten);
    }
    else{
        printf(" >>> Tim thay %d thanh vien co ten [%s]!!! \n\n",cntTen, ten);
    }
    



// in ra danh sach thanh vien theo nam sinh duoc yeu cau
    int namSinh;
    fseek(stdin, 0, SEEK_END);
    printf("\n - nhap nam sinh muon tim: ");
    scanf("%d", &namSinh);

    int cntNam = 0;
    for (int i = 0; i < n; i++)
    {
        if (dstv[i].dob.yy ==namSinh)
        {
            printf(" %-20s %-20s %02d-%02d-%d \n", dstv[i].name, dstv[i].email, dstv[i].dob.dd, dstv[i].dob.mm, dstv[i].dob.yy);

            cntNam++;
        }
    } //ket thuc FOR

    if(cntNam==0){
        printf(" >>> Ko tim thay thanh vien co nam sinh [%d] !!! \n\n", namSinh);
    }
    else{
        printf(" >>> Tim thay %d thanh vien sin nam [%d] !!! \n\n",cntNam, namSinh);
    }
    


}
<?php

// lap trinh CRUD (Create-Retrieve-Update-Delete) cho bang tbAccount

// 1. tao class Account (mo ta cau truc bang tbAccount)
class Account
{
    //ham dung
    public function __construct(public $username = null, public $password = null, public $role = 2)
    {
    }

    public function __toString()
    {
        return "[username=$this->username, password:$this->password, role: $this->role";
    }
}


include_once("../myConnect.php");

//2. tao doi tuong AccountDAO de thuc hien cac chuc nang xem, them. xoa, sua du lieu trong bang tbAccount
class AccountDAO
{
    //ham tra ve danh sach cac tai khoan nguoi dung trong bang tbAccount
    public static function get($username = null, $password = null)
    {
        $ds = null;

        // 1. Tao connection den CSDL db2309.m1
        $cn = fn_connect_oop();

        // 2. CU PHAP lenh SQL lay toan bo ds cac tai khoan
        $sql = "SELECT * FROM `tbAccount`";
        if ($username != null && $password != null) {
            // tim tai khoan theo username
            $sql = "SELECT * FROM `tbAccount` WHERE `username` LIKE '$username'";
        }

        // 3. thi hanh lenh SQL
        $result = $cn->query($sql);

        if ($result == false) {
            echo "<p> LOI: khong the truy van du lieu. <br/> " . $cn->error;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim duoc

            //duyet tat ca cac dong du lieu tra va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new Account(username: $row["username"], password: $row["password"], role: $row["role"]);

                $ds[] = $object;
            }
        }

        //dong ket noi
        $cn->close();
 
        return $ds;
    }
}

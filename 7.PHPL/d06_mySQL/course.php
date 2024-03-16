<?php
// lap trinh CRUD (Create-Retrieve-Update-Delete) cho bang tbCourse

// 1. tao doi tuong Course (tbCourse)
class Course
{
    //ham dung
    public function __construct(public $id = null, public $name = "new course", public $fee = 1000)
    {
    }

    public function __toString()
    {
        return "[id=$this->id, ten khoa hoc:$this->name, hoc phi: $this->fee";
    }
}



include_once("../myConnect.php");

//2. tao doi tuong CourseDAO de thuc hien cac chuc nang xem, them. xoa, sua du lieu trong bang tbCourse
class CourseDAO
{
    //ham tra ve danh sach cac khoa hoc trong bang tbCourse
    public static function get($id = null, $name = null)
    {
        $ds = null;

        // 1. Tao connection den CSDL db2309.m1
        $cn = fn_connect_oop();

        // 2. CU PHAP lenh SQL lay toan bo ds cac khoa hoc
        $sql = "SELECT * FROM `tbcourse`";
        if ($id == null) {
            if ($name != null) {
                // tim khoa hoc theo ten
                $sql = "SELECT * FROM `tbcourse` WHERE `name` LIKE '%$name%'";
            }
        } else {
            // tim khoa hoc theo ma so ID
            $sql = "SELECT * FROM `tbcourse` WHERE `id` = '$id'";
        }

        // 3. thi hanh lenh SQL
        $result = $cn->query($sql);

        if ($result == false) {
            echo "<p> LOI: khong the truy van du lieu. <br/> " . $cn->error;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim duoc

            //duyet tat ca cac dong du lieu tra va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new Course(id: $row["id"], name: $row["name"], fee: $row["fee"]);

                $ds[] = $object;
            }
        }

        //dong ket noi
        $cn->close();

        return $ds;
    }


    //ham them 1 khoa hoc moi vo bang tbCoutse
    public static function insert(Course $new)
    {
        // 1. tao connection den CSDL db2309.m1
        $cn = fn_connect_oop();

        // 2. them 1 khoa hoc moi vo bang khoa hoc
        $sql = "INSERT INTO `tbcourse` (`id`, `name`, `fee`) VALUES (NULL, '$new->name', '$new->fee')";

        $result = $cn->query($sql);
        if ($result == false) {
            echo "<p> LOI: khong the them du lieu. <br/> " . $cn->error;
        }
        //dong ket noi
        $cn->close();
        return $result;
    }


    //ham xoa 1 khoa hoc trong bang tbCoutse theo ma so
    public static function remove($id)
    {
        // 1. tao connection den CSDL db2309.m1
        $cn = fn_connect_oop();

        //2. CU PHAP chuoi lenh SQL xoa khoa hoc theo ma so
        $sql = "DELETE FROM `tbcourse` WHERE `id` = $id";

        //3. thi hanh lenh
        $result = $cn->query($sql);
        if ($result == false) {
            echo "<p> LOI: khong the xoa du lieu. <br/> " . $cn->error;
        }
        //dong ket noi
        $cn->close();
        return $result;
    }


    //thay doi noi 1 khoa hoc trong bang tbCoutse
    public static function update(Course $new)
    {
        // 1. tao connection den CSDL db2309.m1
        $cn = fn_connect_oop();

        // 2. chinh sua noi dung khoa hoc trong bang khoa hoc
        $sql = "UPDATE `tbcourse` 
                SET `name`='$new->name', `fee`='$new->fee' 
                WHERE `id`=$new->id";

        $result = $cn->query($sql);
        if ($result == false) {
            echo "<p> LOI: khong the thay doi du lieu. <br/> " . $cn->error;
        }
        //dong ket noi
        $cn->close();
        return $result;
    }
}


//test thu chuc nang SELECT
// $list = CourseDAO::get();
// print_r($list);
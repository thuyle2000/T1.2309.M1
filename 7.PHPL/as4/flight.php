<?php 
class Flight
{
    //ham dung
    public function __construct(public $id = "B00", public $ftype = "boeing", public $source = "saigon", public $destination="hanoi", public $deptime="06:30",public $hours="3")
    {
    }

    public function __toString()
    {
        return "[id=$this->id, loai mb:$this->ftype, noi khoi hanh: $this->source, noi den: $this->destination, thoi gian khoi hanh: $this->deptime, so gio bay: $this->hours";
    }
}

include_once("../myConnect.php");
class FlightDAO{
    public static function get($id = null, $name = null)
    {
        $ds = null;

        // 1. Tao connection den CSDL dbPHP
        $cn = fn_connect_oop();

        // 2. CU PHAP lenh SQL lay toan bo ds cac chuyen bay
        $sql = "SELECT * FROM `tbflight`";
        if ($id == null) {
            if ($name != null) {
                // tim chuyen bay theo ten
                $sql = "SELECT * FROM `tbflight` WHERE `ftype` LIKE '%$name%'";
            }
        } else {
            // tim chuyen bay theo ma so ID
            $sql = "SELECT * FROM `tbflight` WHERE `id` = '$id'";
        }

        // 3. thi hanh lenh SQL
        $result = $cn->query($sql);

        if ($result == false) {
            echo "<p> LOI: khong the truy van du lieu. <br/> " . $cn->error;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim duoc

            //duyet tat ca cac dong du lieu tra va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new flight(id: $row["id"], ftype: $row["ftype"], source: $row["source"], destination:$row["destination"],deptime:$row["deptime"],hours:$row["hours"] );

                $ds[] = $object;
            }
        }

        //dong ket noi
        $cn->close();

        return $ds;
    }

    //ham them 1 chuyen bay moi vo bang tbFlight
    public static function insert(Flight $new)
    {
        // 1. tao connection den CSDL dbPHP
        $cn = fn_connect_oop();

        // 2. them 1 chuyen bay moi vo bang chuyen bay
        $sql = "INSERT INTO `tbFlight` (`id`, `ftype`, `source`,`destination`,`deptime`,`hours`) VALUES ('$new->id', '$new->ftype', '$new->source','$new->destination', '$new->deptime','$new->hours')";

        $result = $cn->query($sql);
        if ($result == false) {
            echo "<p> LOI: khong the them du lieu. <br/> " . $cn->error;
        }
        //dong ket noi
        $cn->close();
        return $result;
    }


     //ham xoa 1 chuyen bay trong bang tbFlight theo ma so
     public static function remove($id)
     {
         // 1. tao connection den CSDL dbPHP
         $cn = fn_connect_oop();
 
         //2. CU PHAP chuoi lenh SQL xoa khoa hoc theo ma so
         $sql = "DELETE FROM `tbFlight` WHERE `code` = $id";
 
         //3. thi hanh lenh
         $result = $cn->query($sql);
         if ($result == false) {
             echo "<p> LOI: khong the xoa du lieu. <br/> " . $cn->error;
         }
         //dong ket noi
         $cn->close();
         return $result;
     }

}
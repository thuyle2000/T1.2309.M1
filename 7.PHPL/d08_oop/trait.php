<?php 
//dinh nghia trait T chua cac ham say hello, goodbye
trait T {
    public function greeting()  {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $time = date("H");
        if($time<=11){
            echo " >> Good morning ! \n";
        }
        elseif($time<=17){
            echo " >> Good afternoon ! \n";
        }
        elseif($time<=21){
            echo " >> Good evening ! \n";
        }
        else{
            echo ">> Good night ! \n";
        }
    }

    public function farewell(){
        echo " >> Good bye ! See u soon !\n";
    }
}
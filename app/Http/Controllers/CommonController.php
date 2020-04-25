<?php


namespace App\Http\Controllers;


class CommonController {

    public static function alert($info){
        echo "<script language=\"javascript\">
        alert(\"$info\");
        </script>";
    }


    public static function redirect($location){
        //Header("Location: ".$location);
        echo "<script language=\"javascript\">
        location.href=\"$location\"
        </script>";
        exit;
    }

    public static function goBack(){
        echo "<script language=javascript type =text/javascript >";
        echo "history.go(-1)";
        echo "</script>";
    }

}

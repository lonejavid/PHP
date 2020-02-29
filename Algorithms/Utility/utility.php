<?php
class Utility{
    static function getarray(){
        $arr=array();
        $row=readline("Enter the number of elements ");
        for($i=0;$i<$row;$i++){
                $arr[$i]=readline();
        }
        return $arr;
    }
    static function getMoney(){
        $money=readline("Enter the amount \n");
        return $money;
    }
    //dayOfWeek will return the day
    static function dayOfWeek($d , $m , $y){
        $y0 = floor($y - (14 - $m) / 12) +1 ;
        $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
        $m0 = floor($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor(31*$m0 / 12)) % 7) ;
        return $d0;
    }
}
?>
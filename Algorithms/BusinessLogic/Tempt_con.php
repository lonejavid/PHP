<?php
class Temp{
/* the Tempcon method will conver the tempeatures from celcius to fahrenheit and vice versa
    */
    public static function TempCon(){
        echo "1 Celsius  2.Fahrenheit \n";
        $ch=readline();
        if($ch==1){
        echo "Enter the Tempeature in Celsius \n";
        $temp=readline();
        $x=($temp/5)+32;
        echo "Tempeature in Fahrenheit is $x";
        }
        elseif($ch==2){

            echo "Enter the Tempeature in Fahrenheit \n";
            $temp=readline();
            $x=($tem-32)*9/5;
            echo "Tempeature in Celsius is $x";
        }
        else
        echo "invalid choice";
    }
}
?>
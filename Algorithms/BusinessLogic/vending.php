<?php
include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
class Vending{
static $total;
    /*the cal method will return the change of the amount which a user enter as sum of multiples of 1000,500,100,50,10,5,2,1
    */
    static public function cal()
    {
        $n=Utility::getMoney();
        if($n == 0)
        {
            return;
        }
        
        $money = array(1000,500,100,50,10,5,2,1);
        $temp = 0;
        for($i = 0;$i < sizeof($money);$i++)
        {
            if( $n >= $money[$i])
            {
                $temp = (int) ($n/$money[$i]);
                $n = $n % $money[$i];
                echo $money[$i]."rs =".$temp."\n";

                self::$total = self::$total+$temp;
                Vending::cal($n);
                return;
            }
        }
        return;            
    }
}
?>
<?php
    include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
    class VendingMachine
    {
        static $total;
        static function cal($n)
        {
            
            
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
                    VendingMachine::cal($n);
                    return;
                }
            }
            return;            
        }
    }
    VendingMachine::cal(Utility::getMoney());
    echo VendingMachine::$total."\n";
?>
<?php
class Pay{
/*the payment method will return the payment which you need to pay monthly 
    */
    public static function payment(){
        echo "Enter the principal amount";
        $P=readline();
        echo("Enter the years \n");
        $Y=readline();
        echo "Enter the interest rate\n ";
        $R=readline();
        $r=$R/(12100);
        $n = 12 * $Y;
        $r = $R / (12 * 100);
        $pri = $P * $r / (1 - ((1 + $r)**(-$n)));
        echo $pri." Rs\n"; 
        echo "Amount to be pay per month is $pri";
}
}
?>
<?php
class Netwon{
/* the newtonMethod is used to find the squareRoot of a number by repeatdly 
calculating the approximate value
*/
public function newtonsMethod(){
    echo "Enter the Number \n";
    $n=readline();
    $num=readline("Enter how many times you want to calculate the approximate ");
    $approx=0.5*$n;
    for($i=0;$i<$num;$i++){
        $betterapprox=0.5*($approx+$n/$approx);
        $approx=$betterapprox;
    }
    echo "The answer is $approx";
}
}
?>
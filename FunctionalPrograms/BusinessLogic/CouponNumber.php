<?php
class Coupon
{
   static function couponNumbers($n)
       {    
           //array to save the coupon
           $arr = array();
           //$i = 0;
           //count to count the number of thime rendom number generated
           $count = 0;
           //index to change the index of array
           $index = 0;
           //while loop until use get n number of coupon
           while(sizeof($arr) != $n)
           {
               $count++;
               $num = random_int(10,($n+100));
               //if condition to check the coupon use unique or not
               if(!array_search($num,$arr))
               {
                   $arr[$index++] = ($num);
               }
           }

           //no of time coupon generated
           echo "count ".$count."\n";
           //unique coupon
           foreach ($arr as $print) {
               echo $print."\n";
           }
       }
    }
    ?>
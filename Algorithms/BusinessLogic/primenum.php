<?php
class Prime{
          /*primeNumber method used to generate the prime numbers from 0 to 1000 */
       /*primeNumber method used to generate the prime numbers from 0 to 1000 */
       static  function primeNumber()
        {
            $arr = array();
            $index = 0;
            /*
            * for loop initialize from 2 because 0 and 1 are not prime number
            */
            for ($i = 2; $i < 1000; $i++) {
                /*
                * for loop to check that number is divisible by any other number or not if it
                * is divisible by any other number then loop will break and return false
                */

                $b = true;
                for ($j = 2; $j <= $i / 2; $j++) {
                    if ($i % $j == 0) {
                        $b = false;
                        break;
                    }
                }
                /*
                * if number is divisible by only one and itself the it will add to ArrayList
                */
                if ($b == true) {
                    $arr[$index++] = $i;
                    //echo $i."\n";
                }
            }  
            return $arr; 
        }
 }
?>
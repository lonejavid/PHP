<?php
    class Anagram_
    {
        /*the anagramStr takes two strings as parametrs and return wether the two
        strings are anagram or not.
        */
        static function anagramStr($ar1,$ar2)
        {  
            //count method is used to check wehter the two stirngs are havig the equal number of characters
            if(count($ar1) == count($ar2))
            {
                //foreach used to access each element of string and storing it into $del variable
                foreach($ar1 as $del)
                {
                    $index = array_search($del,$ar2);
                    if($index !== false)
                    {
                        unset($ar2[$index]);
                    }              
                }
                if (sizeof($ar2) == 0) 
                {
                    echo "anagram\n";
                } 
                else{
                    echo "The two strings are not anagram";
                }
            }
            else
            {
                echo "nop\n";
            }
            
        }
        /*this is_anagram method checks wehter the numbers are anagram or not
        it returns true if the numbers are anagram otherwise false
        */
        static function is_anagram($m,$n){
            $len1=strlen($n);
            $len2=strlen($m);
            //strlen method is used to check wehter the two stirngs are havig the equal number of characters
            if($len1!=$len2){
                return false;
            }
            else{
                if(count_chars($m,1)==count_chars($n,1))
                return true;
            }
            return false;

        }
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

        /*
	    * function to check number is palindrome or not
	    * 
	    * @param n int to pass number which we want to check
	    * @return true or false that number is palindrome or not
	    */
       static function palindrome($arr)
        {
            $arry=array();
            for($i=0;$i<count($arr);$i++){
                if($arr[$i] > 9)
                {
                    $number = $arr[$i];  
                    $sum = 0;  
                    while(floor($number)) {  
                    $rem = $number % 10;  
                    $sum = $sum * 10 + $rem;  
                    $number = $number/10;  
                    }
                    if($sum == $arr[$i]){
                        $arry[]=$sum;
                    }
                }   
            }
            return $arry;
        }  
     }
?>
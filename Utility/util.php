<?php
class Util
{
    /**
        * function getInt is method which take user input and 
        * check the input is numeric or not
        * @return $n int type value
        */
        static function getInt()
        {
            fscanf(STDIN,"%d\n",$n);
            while(!is_numeric($n))
            {
                echo "enter numeric value"."\n";
                fscanf(STDIN,"%d\n",$n);
            }
            return $n;     
        }
        static function dayOfWeek($d , $m , $y){
            $y0 = floor($y - (14 - $m) / 12) ;
            $x = floor($y0 + floor($y0/4) - floor($y0/100) + floor($y0/400));
            $m0 = $m + 12 * floor((14 - $m) / 12) - 2 ;
            $d0 = ($d + $x + floor((31*$m0) / 12)) % 7;
            return $d0;
        }

    /**function leapYear is use to check the year is leap year or not it 
        * take input form use and print year is leap or not 
        *
        * @param $n is year which we want ot check leap year or not  
        */
        static function leapYear($n)
        {
                if (strlen((string)$n)==4) 
                {
                    //check year is leap or not
                    if ((($n % 4 == 0) && ($n % 100 != 0)) || ($n % 400 == 0)) 
                    {
                    return true;
                    } 
                    else 
                    {
                        return false;
                    }   
                }  
                else
                {
                    return false;
                }                                
        }
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
    function printDay($d,$m,$y)
        {
            
            $y0 = $y - (int)((14 - $m) / 12);
            $x = $y0 + (int)($y0/4) - (int)($y0/100) + (int)($y0/400);
            $m0 = $m + 12 * (int)((14 - $m) / 12) - 2;
            $d0 = ($d + $x + (int)((31*$m0) / 12)) % 7;
            return $d0;
        }
    static function primeNumber(){
        $primes = array();
        $is_prime_no = false;
        for ($i = 2; $i<1000; $i++) {
            $is_prime_no = true; 
                for ($j = 2; $j<=($i/2); $j++) {
                    if ($i%$j==0) {
                          $is_prime_no = false;
                                  break;
                                }
                   }
        if ($is_prime_no) {
               array_push($primes,$i);
                  }
                }
        return $primes;
                
    }
}
?>
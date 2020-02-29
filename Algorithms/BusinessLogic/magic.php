<?php
class Magic_num{
/* the magic method returns a numbers which which a user think in his mind
it repeatdely asks the user wether a number is less than a particular number 
and finally return the number */
public static function magic()
{
    echo "Enter a number ";
    $k=readline();
    $limit=pow(2,$k);
    echo "inagine a number between 0 and $limit in your mind \n";
    $num=Magic_num::search(0,$limit);
    echo "Your number is $num\n";
}
/*the serach method searches for a number between some range
*/
public static function search($lo,$limit){
    if($limit-$lo==1){
        return $lo;
    }//mid will store a middle of the array
    $mid=$lo+($limit-$lo)/2;
    echo "is your number less than $mid ";
    $flag=readline();
    if($flag==1){
        return Magic_num::search($lo,$mid);
    }
    else{
        return Magic_num::search($mid,$limit);
    }
}
}
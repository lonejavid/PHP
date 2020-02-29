<?php
class Methods
{
/* the binarySearch method takes two parameers.
      one is array and the other is they element which you want to find 
      */
    public static function binarySearch(Array $arr, $x) 
{ 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
      
    while ($low <= $high) {  
        $mid = floor(($low + $high) / 2); 
        if($arr[$mid] == $x) { 
            echo "element found"; 
        } 
  
        if ($x < $arr[$mid]) { 
            $high = $mid -1; 
        } 
        else { 
            $low = $mid + 1; 
        } 
    }  
    echo "  Element not found";
} 
/* the binarySearch method takes two parameers.
      one is array and the other is they element which you want to find 
      */
public static function binarySearchStr($arr, $x) 
{ 
    $l = 0; 
    $r = count($arr); 
    while ($l <= $r)  
    { 
        $m = $l + (int)(($r - $l) / 2); 
  
        $res = ($x == $arr[$m]);
        if ($res == 0) 
            return $m - 1; 
        if ($res > 0) 
            $l = $m + 1;
        else
            $r = $m - 1; 
    } 
  
    return -1; 
} 
/*the insertion sort method sortes the given array
and returns a sorted array
*/
public static function insertionSort(&$arr, $n) 
{ 
    for ($i = 1; $i < $n; $i++) 
    { 
        $key = $arr[$i]; 
        $j = $i-1; 
        while ($j >= 0 && $arr[$j] > $key) 
        { 
            $arr[$j + 1] = $arr[$j]; 
            $j = $j - 1; 
        } 
          
        $arr[$j + 1] = $key; 
    } 
} 
/*the bubbleSort sort method sortes the given array
and returns a sorted array
*/
public static function bubbleSort(&$arr) 
{ 
    $n = sizeof($arr); 
  
    for($i = 0; $i < $n; $i++)  
    { 
        for ($j = 0; $j < $n - $i - 1; $j++)  
        { 
            if ($arr[$j] > $arr[$j+1]) 
            { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
            } 
        } 
    } 
} 
}
?>
<?php
class BinarySearch{
    /* the binarySearch method takes two parameers.
      one is array and the other is they element which you want to find 
      */
      static function Serach(){ 
      { 
        $content=file('C:\Users\sneha\Desktop\Algorithms\BusinessLogic\files\data.txt');
        foreach($content as $line)
        $arr=explode(" ",$line);
          $x=readline("Enter the word you want to search...");
          if (count($arr) === 0) return false; 
          $low = 0; 
          $high = count($arr) - 1; 
            
          while ($low <= $high) {  
              $mid = floor(($low + $high) / 2); 
              if($arr[$mid] == $x) { 
                  echo "element found\n"; 
              } 
        
              if ($x < $arr[$mid]) { 
                  $high = $mid -1; 
              } 
              else { 
                  $low = $mid + 1; 
              } 
          }  
         // echo "  Element not found";
      } 
}
}
?>
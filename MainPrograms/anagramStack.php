<?php
    /**
    * 
    * Purpose: prime anagram value store in the stcak and pop and print anagram value
    * 
    *  @author  Javid lone
    
    */
 
    include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\stack.php';
    include 'C:\Users\sneha\Desktop\datastructures\Utility\util.php';
    //get prime number
    $arr = Util::primeNumber();
    $stack = new Stack();
    //access value of prime number array one by one
    for ($i=0; $i < sizeof($arr); $i++) { 
        for ($j=0; $j < sizeof($arr); $j++) { 
           if ($i != $j) {
               //push in the stack 
               if (Util::is_anagram($arr[$i],$arr[$j])) {
                   $stack->push($arr[$i]);
                   break;
               }
           }
        }
    }
    //pop and print all the value of the stack
    while (!$stack->isEmpty()) {
        echo $stack->pop()."\n";
    }
?>
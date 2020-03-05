<?php
     /**
    * Purpose: prime anagram value store in the queue and dequeue and print anagram value
    *  @author  javid lone
    */
    include 'C:\Users\sneha\Desktop\datastructures\Utility\util.php';
    include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\QueueOperations.php';
    //get prime number
    $arr = Util::primeNumber();
    $queue = new Queue();
    //access each value of prime number 
    for ($i=0; $i < sizeof($arr); $i++) { 
        for ($j=0; $j < sizeof($arr); $j++) { 
           if ($i != $j) {
               //store anagram in queue
               if (Util::is_anagram($arr[$i],$arr[$j])) {
                   $queue->enqueue($arr[$i]);
                   break;


                   //hi
               }
           }
        }
    }
    //dequeue all anagram from the queue
    while (!$queue->isEmpty()) {
        echo $queue->dequeue()."\n";
    }
?>
<?php
/********************************************************************
* @Execution : Desktop/linkedlist $ php anagramPrime.php
* @description :Implementation of linked list
* @Purpose : It is based on storing the data in the linked list.
* @function : anagramPrime
* @file : anagramPrime.php
* @author : Javid <lonejavid0739@gmail.com>
*/
include 'C:\Users\sneha\Desktop\datastructures\Utility\util.php';
include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\queue.php';  
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
               }
           }
        }
    }
    //dequeue all anagram from the queue
    while (!$queue->isEmpty()) {
        $del=$queue->dequeue();
        $var=$del->data;
        echo " $var";
    }
?>
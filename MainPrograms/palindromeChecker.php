<?php
    /********************************************************************
* @Execution : Desktop/palindromeChecker $ php palindromeChecker.php
* @description :To check wether a string is pallindrome or not using dequeue
* @Purpose : It is based on storing the data in a dueue data structure.
* @file : palindromeChecker.php
* @author : Javid <lonejavid0739@gmail.com>
*/
    include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\deque.php';
    //object of deque
    $d = new Deque();
    //get string
    $str = readLine("enter word: ");
    //for loop to add all value in deque
    for ($i=0; $i < strlen($str); $i++) { 
        $d->addRear($str[$i]);
    }
    //b for boolean valure
    $b = true;
    //for loop to check string char
    for ($i=0; $i < strlen($str)/2; $i++) { 
        //pop value from front and rear and check the are equal or not
        if ($d->removeFront() != $d->removeRear()) {
           $b = false;
           break;
        }
    }
    //print true false
    if ($b) {
        echo "true\n";
    }else {
        echo "false\n";
    }

?>
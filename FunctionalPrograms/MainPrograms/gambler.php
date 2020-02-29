<?php
include 'C:\Users\sneha\Desktop\revised\Utility\utility.php';
    //to take input from user detail about stack, goal and number of time he want to bet 
    echo "enter stack"."\n";
    $stake = Utility::getInt();
    echo "\n"."enter goal"."\n";
    $goal = Utility::getInt();
    while ($goal < $stake) {
        echo "enter goal value bigger then stack\n";
        $goal = Utility::getInt();
    }
    echo "\n"."enter number of times"."\n";
    $n = Utility::getInt();
    Utility::gambler($stake,$goal,$n);
?>
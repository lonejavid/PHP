<?php
include 'C:\Users\sneha\Desktop\Algorithms\BusinessLogic\static_methods.php';
include 'C:\Users\sneha\Desktop\Algorithms\Utility\util.php';
echo "1. BinarySearch   2.InsertionSort    3.Bubble sorrt    ";
$choice=readline("Enter your choice ");
    if($choice==1){
        /*call to getdat method od Utility class
        */
        $arr=Util::getdata();
        $key=Util::getkey();
        //start is used to keep the starting value of time when the function was called
        $start=time();
        $pos=Util::binarySearch($arr,$key);
        $stop=time();
        $tim=$stop-$start;
        //echo "Time taken to sort the elements using bubblesort is $tim"
        echo "time taken $tim\n";
        if($pos>=0){
            echo "Element found at. $pos";
        }
        else
            echo"element not found";
    }
    else if($choice==2){
        $arr=Util::getdata();
        $start=time();
        $arr=Util::insertionSort($arr);
        $stop=time();
        $tim=$stop-$start;
        //echo "Time taken to sort the elements using bubblesort is $tim"
        echo "time taken $tim\n";
        echo "Sorted elements are";
        foreach($arr as $val)
            echo " $val";
    }
else if($choice==3){
        $arr=Util::getdata();
        $start=time();
        $arr=Util::bubbleSort($arr);
        $stop=time();
        $tim=$stop-$start;
        //echo "Time taken to sort the elements using bubblesort is $tim"
        echo "time taken $tim";
        echo "\nSorted elements are\n";
        foreach($arr as $val)
            echo " $val";
    }
    else
        echo "invalid choice";
?>
<?php
include 'C:\Users\sneha\Desktop\Algorithms\BusinessLogic\insertionsort.php';
include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
$arr=Utility::getarray();
$arr=Insertion::insertion_Sort($arr);
echo "sorted elements are";
foreach($arr as $item)
echo " $item";
?>
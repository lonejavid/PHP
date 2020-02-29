<?php
include 'C:\Users\sneha\Desktop\Algorithms\BusinessLogic\Bubblesort.php';
include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
$arr=Utility::getarray();
$arr=Bubblesrt::bubble_Sort($arr);
echo "sorted elements are";
foreach($arr as $item)
echo " $item";
?>
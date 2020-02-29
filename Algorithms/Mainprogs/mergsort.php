<?php
include 'C:\Users\sneha\Desktop\Algorithms\BusinessLogic\mergsort.php';
include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
$arr=Utility::getarray();
$arr=Merg_sort::merge_sort($arr);
echo "sorted elements are";
foreach($arr as $item)
echo " $item";
?>
<?php
/********************************************************************
* @Execution : Desktop/DataStructures/orderedlist $ php  orderedlist.php
* @description :Implementation of ordered linked list in PHP
* @Purpose : It is based on storing the list items in a proper order.
* @function : DataStructures/orderedlist
* @file : orderedlist
* @author : Javid <lonejavid0739@gmail.com>
*/
include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\Orderedlist.php';
$obj=new OrderedList();
$data=file('C:\Users\sneha\Desktop\datastructures\Utility\data.txt');
foreach($data as $line)
    $arr=explode(' ',$line);
foreach($arr as $x)
    $obj->add($x);
echo " Enter a number you want to search in the given data\n";
$x=readline();
if($obj->search($x))
{
    $obj->remove($x);
}
else 
    $obj->add($x);
echo " after performing the recquired operation \n";
$arr=$obj->readList();
foreach($arr as $x)
    echo " $x";
    ?>

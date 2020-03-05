<?php
/********************************************************************
* @Execution : Desktop/Queue $ php Queue.php
* @description :Implementation of linked list
* @Purpose : It is based on storing the data in a queue whic works on the concept of First In First Out list.
* @function : Queue
* @file : Queue.php
* @author : Javid <lonejavid0739@gmail.com>
*/
include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\QueueOperations.php';
$obj=new Queue();
$n=readline("Enter the number of elements you want to save in the queue");
for($i=0;$i<$n;$i++)
{
    $data=readline();
    $obj->enqueue($data);
}
$element=$obj->dequeue();
echo " $element";
?>
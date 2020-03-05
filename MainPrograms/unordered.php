<?php
/********************************************************************
* @Execution : Desktop/linkedlist $ php linkedlist.php
* @description :Implementation of linked list
* @Purpose : It is based on storing the data in the linked list.
* @function : MainPrograms
* @file : linkedlist.php
* @author : Javid <lonejavid0739@gmail.com>
*/
include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\unOrderedList.php';
//reading the data from the file data.txt
$content=file('C:\Users\sneha\Desktop\datastructures\MainPrograms\files\data.txt');
/*accessing the data from the content and storing in the list
*/
foreach($content as $line)
    $arr=explode(" ",$line);
//creating tshe object of LinkedList class
$obj=new LinkList();
foreach($arr as $val)
    //inserting the data into linked list
    $obj->insertLast($val);
$word =readline("Enter the word you want to seach in the list \n");
if($obj->find($word))
    $obj->deleteNode($word);
else
$obj->insertLast($word);
$arr=$obj->readList();
foreach($arr as  $word)
    echo " $word";

?>

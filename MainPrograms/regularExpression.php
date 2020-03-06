<?php
/********************************************************************
* @Execution : Desktop/Oops/MainPrograms $ php regex.php
* @description :Read in the following message: Hello <<name>>, We have your full
    name as <<full name>> in our system. your contact number is 91­xxxxxxxxxx.
    Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016.
* @Purpose : Print the Modified Message.
* @function : Utility/utility
* @file : regex.php
* @author : javid lone <lonejavid0739@gmail.com>
* @version : 7.2.24
* @since : 06-03-2020
*/
include 'C:\Users\sneha\Desktop\ObjectOriented Programming\Utilty\utility.php';
$str="Hello <<name>>, We have your full
name as <<full name>> in our system. your contact number is 91­xxxxxxxxxx.
Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016.";
echo "Enter the valid name \n";
$name=Utility::validateName();
echo "Enter the valid FullName \n";
echo "Enter the valid 10 digit ";
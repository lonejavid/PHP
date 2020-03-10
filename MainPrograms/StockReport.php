<?php
/********************************************************************
* @Execution : Desktop/Datastructure/MainPrograms $ php stockReport.php
* @description :Write a program to read in Stock Names, Number of Share, Share Price.
    Print a Stock Report with total value of each Stock and the total value of Stock.
* @Purpose : Print the Stock Report
* @function : Utility/utility
* @file : stockReport.php
* @author : javid lone <lonejavid0739@gmail.com>
* @since : 10-03-2020
*********************************************************************/
include 'C:\Users\sneha\Desktop\ObjectOriented Programming\Utilty\utility.php';
function Data()
{
    global $item;
    $array=array("StockName"=>"","noOfStocks"=>0,"price"=>0,"total"=>0);
    echo "enter the stock name: ";
    $name=Utility::nameValidation();
    $array['StockName']=$name;
    echo "enter the number of shares: ";
    $shares=Utility::numberValidation();
    $array['noOfStocks']=$shares;
    echo "enter the share price: ";
    $price=Utility::numberValidation();
    $array['price']=$price;
    $array['total']=$price*$shares;
    array_push($item, $array);
}
function saveData($item)
{
    $fp=fopen('stockReport.json','w');
    fwrite($fp,json_encode($item));
    fclose($fp);
}
function getJson()
{
    $array=json_decode(file_get_contents('stockReport.json'));
    return $array;
}
function display($array)
{
    $stockValue=0;$totalStockVal=0;
    echo "\nname   noOf  price  total \n";
   for($i=0;$i<count($array);$i++){
       echo $array[$i]->StockName,"  ",$array[$i]->noOfStocks,"  ",$array[$i]->price,"  ",$array[$i]->total,"\n";
       $totalStockVal+=$array[$i]->total;
   }
    echo "\nvalue of total stocks: ",$totalStockVal,"\n\n";
}
$item=array();
$n=1;
while($n== 1){
    Data();
    echo "  enter 1 to add\n  \t2 to exit:  ";
    $n=readline();
}
saveData($item);
$arr=getJson();
display($arr);
?>
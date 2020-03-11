<?php
/********************************************************************
 * @Execution : Fellowship/OOps/Oops/MainPrograms $ php inventoryManagement.php
 * @description :Extend the above program to Create InventoryManager to manage the
Inventory. The Inventory Manager will use InventoryFactory to create Inventory
Object from JSON. The InventoryManager will call each Inventory Object in its list
to calculate the Inventory Price and then call the Inventory Object to return the
JSON String. The main program will be with InventoryManager
 * @Purpose : Create the JSON from Inventory Object and output the JSON String.
 * @function : Utility/utility
 * @file : inventoryManagement.php
 * @author : javid lone <lonejavid0739@gmail.com>
 * @since : 11-03-2020
 *********************************************************************/
include '/home/admin1/Documents/FellowShip/MainPrograms/invertoryManagement/BusinessLogic.php';
include '/home/admin1/Documents/FellowShip/StackAccount/Mainprogram/utility.php';
function run()
{
    $obj = new BusinessLogic();
    echo "Menu :\n";
    echo "Press 1 to Enter New Details in Stock Portfolio \nPress 2 to to clear and create new Portfolio \n";
    echo "Enter 3 to Display Old Shares With Report\nElse exit anything to exit\n";
    $option = Utility::getInt();
    switch ($option) {
        case 1:$obj->add();
            run();
            break;
        case 2:$obj->newPort();
            run();
            break;
        case 3:
            $port = json_decode(file_get_contents('stock.json'));
            $obj->printReport($port);
            echo "\n";
            break;
        default:
            echo "exit\n";
            break;
    }
}
run();
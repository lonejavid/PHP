<?php
    /**
    * 
    * Purpose: balanceParentheses is to check the parentheses of the arithmetic expression
    * is balance or not with the help of stack
    *
    *  @author  Javid Lone
    */
    include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\stack.php';
    //object of stack
    $st = new Stack();
    //take arithmetic expression from user and split it into array
    $arr = str_split(readline("enter Arithmetic Expression: "),1);
    //access element one by one
    foreach ($arr as $key) {
        //if t get open parentheses then it will push in the stack
        if ($key == "(") {
            $st->push($key);
        }
        //else if it get close parentheses the pop
        elseif ($key == ")") {
            if ($st->isEmpty()) {
                echo "not balace\n";
               return;
            }
            $st->pop();
        }
    }
    //int the end if stack is empty then parentheses is balance else not balance
    if ($st->isEmpty()) {
        echo "balance\n";
    }else {
        echo "not balace\n";
    }
    
?>
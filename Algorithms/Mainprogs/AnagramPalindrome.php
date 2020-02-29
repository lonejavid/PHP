<?php
include 'C:\Users\sneha\Desktop\Algorithms\BusinessLogic\Anagrampalin.php';
$prime=Anagram_::primeNumber();
$array=Anagram_::palindrome($prime);
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($prime);$j++){    
            if(Anagram_::is_anagram($array[$i], $prime[$j]))
            echo "$array[$i] and $prime[$j] are anagram \n";        
        }  
    }
?>
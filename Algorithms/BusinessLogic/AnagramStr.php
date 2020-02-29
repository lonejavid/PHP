<?php
class Anagram{
/*the is_anagram method is used to check wehter the two numbers 
     are anagram nor notIt takes two parameters
     */ 
function is_anagram()
 {
     $a=readline("Enter the string ");
     $b=readline("Enter the other String ");
       if (count_chars($a, 1) == count_chars($b, 1))
    {
        echo "This two strings are anagram";
    }
    else
    {
        echo "This two strings are not anagram";
    }
 }
}?>
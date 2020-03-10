<?php
class Utility{
    //*the getInt method reads an input integer from the user and validates it and returns an Integer.
    static function getInt(){
        $n=readline();
        if(is_numeric($n))
            return $n;
        else
            echo " Not a number \n";
            Utility::getInt();
    }
    /*nameValidation method reads a string from the user and validates the it.
    *the return type of this method is string.
    */
    static function nameValidation(){
        $name=readline();
        if (preg_match("/^[a-zA-Z\-\']+$/", $name)){
            return $name;
        }
        else{
            echo "enter a valid name\n";
            Utility::nameValidation();
        } 
    }
    /*the numberValidation method reads a phone number from the user and validates it.
    *the return type for this method is integer.
    */
    public static function numberValidation()
    {

        fscanf(STDIN, "%d\n", $n);
        while (!is_numeric($n)) {
            fscanf(STDIN, "%d\n", $n);
        }
        return $n;
    }
    /*
    *fullNamevalidation method reads a full name of the user and validates the name
    */
    static function fullNamevalidation()
    {
        $fullName=readline();
        if (preg_match("/^[a-zA-Z\- \']+$/", $fullName))
            return $fullName;
        else
            echo " Not a Valid fullName \n";
            Utility::fullNamevalidation();
    }
} 
?>
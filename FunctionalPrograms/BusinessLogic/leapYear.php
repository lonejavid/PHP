<?php
class leapYear{
    public function leap()
    {
    $year = readline("Enter the valid year\n");
    if (strlen($year) > 0 and strlen($year) <= 4) {
        if (($year % 4) == 0) {
            echo "The year $year is a leap year";
        } else {
            echo "The year $year is not a leap year";
        }

    } else {
        echo "Please Enter the Valid year";
    }
}
}
?>
<?php
include 'C:\Users\sneha\Desktop\Algorithms\Utility\utility.php';
class Day{
/*this method will return the day of the week depending the user input
    */
    public function main()
    {
        echo "Enter day ";
        $d = readline();
        echo "Enter month ";
        $m = readline();
        echo "Enter year ";
        $y = readline();
        $d0 = Utility::dayOfWeek($d, $m, $y);
        $d1 = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
        $day = explode(" ", $d1);
        echo "day on given date is " . $day[$d0] . "\n";
    }
}
?>
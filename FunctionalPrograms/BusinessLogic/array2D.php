<?php
class Arr
 {
public function twoDimenArray()
    {
        $rows = readline("Enter the number of rows...");
        $cols = readline("Enter the number of columns...");
        $array1 = [];
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $array1[$i][$j] = readline();

            }
        }
        echo "The entered array is as below...\n";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo $array1[$i][$j];
                print(" ");

            }
            echo "\n";
        }
    }
}
?>
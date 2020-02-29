<?php
/*
    the tripletEqualsToZero method computesnthe triplet whose sum equals to zero 
    *it prints the triplet and the number of triplets found in the given data
    */
    class Tri{
    public function tripletEqualsToZero()
    {
        //$arr array is used to store the user input data
        $arr = [];
        $size_ = readline("Enter the number of elements\n");
        echo "Enter the elements \n";
        for ($i = 0; $i < $size_; $i++) {
            $arr[$i] = readline();
        }
        $count = 0;
        $flag = 0;
        for ($i = 0; $i < $size_ - 2; $i++) {
            for ($j = $i + 1; $j < $size_ - 1; $j++) {
                for ($k = $j + 1; $k < $size_; $k++) {
                    $sum = $arr[$i] + $arr[$j] + $arr[$k];
                    if ($sum == 0) {
                        echo "triplet  $arr[$i] $arr[$j] $arr[$k]\n";
                        $count += 1;
                        $flag = 1;
                    }

                }
            }
        }
        if ($flag == 0) {
            echo "Triplets doesnt Exist";

        } else {
            echo "\n Number of triplets found are $count";
        }

    }
}
    ?>
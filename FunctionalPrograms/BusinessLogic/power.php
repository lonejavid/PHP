<?php
class Power{
public function power2()
    {
        $sum = 0;
        $n = 0;
        $n = readline("Enter the power value");
        if ($n > 0 and $n < 31) {
            $sum = 2 ** $n;
            echo "2 power $n = $sum";
        } else {
            echo "Invalid number";
        }
    }
}
?>
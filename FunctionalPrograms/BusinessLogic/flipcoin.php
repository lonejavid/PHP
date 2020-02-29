<?php
class Flipcon{
public function FlipCoin()
    {
        $n = readline("Enter the number of times you want to flip the coin \n");
        $head = 0;
        $tail = 0;
        $temp = 0.5;
        $per_head = 0;
        for ($i = 0; $i < $n; $i++) {{}
            $val = rand(0, 1);
            if ($val == 0) {
                $head += 1;
            } else {
                $tail += 1;
            }

        }
        $per_head = ($head / $n) * 100;
        echo "The percentage of heads is =$per_head\n";
        $per_tail = ($tail / $n) * 100;
        echo "The percentage of tails is =$per_tail\n";
    }
}
?>
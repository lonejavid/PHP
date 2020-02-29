<?php
class Equation{
/*/find roots method is retuns three types of roots depending upon the user input.
    *real roots,equal roots and imagenary roots
    */
    public function findRoots()
    {
        $a = readline("enter a\n");
        $b = readline("enter b\n");
        $c = readline("enter c\n");
        //validate the user input
        if ($a == 0) {
            echo "Invalid";
            return;
        }
        //calculation of discrinent
        $d = $b * $b - 4 * $a * $c;
        $sqrt_val = sqrt(abs($d));
        //if discrimnent is greater than zero then the roots are real
        if ($d > 0) {
            echo "Roots are real and " .
                "different \n";
            echo (-$b + $sqrt_val) / (2 * $a), "\n",
                (-$b - $sqrt_val) / (2 * $a);
            }
            ///if discrimnent is equal to zero then the roots are same
         else if ($d == 0) {
            echo "Roots are real and same \n";
            echo -$b / (2 * $a);
        } else 
        //if discrimnent is less than zero then the roots are imagenary
        {
            echo "Roots are complex \n";
            echo -$b / (2 * $a), " + i",
            $sqrt_val, "\n", -$b / (2 * $a),
            " - i", $sqrt_val;
        }
    }
}
?>
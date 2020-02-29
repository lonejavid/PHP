<?php
class Distan
{
    public function distance()
    {
        //first cordinate of a point
        echo "enter x" . "\n";
        $x = readline();
        //second cordinate of a point
        echo "enter y" . "\n";
        $y = readline();
        //distance from the origin(0,0) and the point (x,y)
        echo "distance = " . sqrt(($x * $x) + ($y * $y)) . "\n";
    }
}
?>
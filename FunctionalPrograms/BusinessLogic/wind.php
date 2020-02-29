<?php
class Windchll{
public function windChill()
    {
        echo "Enter the tempeature \n";
        $temp = readline();
        echo "Enter the wind speed";
        $wind = readline();
        echo "wind chill " . (35.74 + (0.6215 * $temp) + (0.4275 * $temp - 35.75) * ($wind ** 0.16)) . "\n";
    }
}
?>
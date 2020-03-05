<?php

/**
 * program that takes the month and year as command-line arguments and prints the Calendar of the month
 * Using Queue
 * @author javid lone
 */

//require functions and classes in below files to works
include 'C:\Users\sneha\Desktop\datastructures\Utility\util.php';
include 'C:\Users\sneha\Desktop\datastructures\BusinessLogic\queue.php';
class WeekDay
{

    /**
     * Constructor for class WeekDay
     */
    public function __construct($day, $date)
    {
        $this->date = $date;
        $this->day = $day;
    }
    public $day;
    public $date;
}

/**
 * Function to Run the calender Usind Queue
 */
function calQueue()
{
    $que = new Queue();
    //taking input with validation
    echo "Enter Month ";
    $month = Util::getInt();
    while ($month > 12) {
        echo "enter correct month ";
        $month = Util::getInt();
    }
    echo "Enter Year ";
    $year = Util::getInt();
    while ($year < 1000) {
        echo "enter correct year ";
        $year = Util::getInt();
    }
    $totalDays = calTotal($month, $year);
    $start = Util::dayOfWeek(1, $month, $year);
    $count = 1;
    $days = explode(" ", "Sun   Mon   Tue   Wed   Thu   Fri   Sat");
    for ($i = 0; $i <= $start; $i++) {
        $que->enqueue(new WeekDay($days[$i], " "));
    }
    for ($i = 0; $i < $totalDays; $i++) {
        $que->enqueue(new WeekDay($days[$start % 7], $count++));
        $start++;
    }
    printCalQ($que);
}

/**
 * Function to print the queue in form of calender
 */
function printCalQ($que)
{
    echo "Sun   Mon   Tue   Wed   Thu   Fri   Sat\n";
    for ($i = 0;!$que->isEmpty(); $i++) {
        $w = $que->dequeue();
        if ($w->date < 10) {
            echo $w->date;
        } else {
            echo "$w->date" . "    ";
        }
        if ($i % 7 == 6) {
            echo "\n";
        }
    }
}

/**
 * Function to calculate the total days in a month
 */
function calTotal($month, $year)
{
    if ($month < 8) {
        if ($month % 2 == 0) {
            if ($month == 2) {
                if (Util::isLeapYear($year)) {
                    return 29;
                }
                return 28;
            }
            return 30;
        } else {
            return 31;
        }
    } else {
        if ($month % 2 == 0) {
            return 31;
        }
        return 30;
    }
}
/**
 * calling the function to test
 */
calQueue();

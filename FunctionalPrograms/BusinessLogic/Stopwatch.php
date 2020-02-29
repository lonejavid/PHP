<?php
/* @description :the stopWatch method is gives as the time interval between the execution of some event
    * @Purpose : It is based on recording the time of execution.
    */
    class Stop{
        public function stopWatch()
         {
        $st = 0;
        $sp = 0;
        //taking the user input to start or stop the watch
        echo "press 1 to start watch" . "\n" . "press 2 to stop watch" . "\n";
        $start = readline();
        //started to record the time
        if ($start == 1) {
            $st = time();
        }
        $stop = readline();
        //stoped 
        if ($stop == 2) {
            $sp = time();
        }//the total time between start and stop
        echo ($sp - $st) . " sec";

    }
}
?>
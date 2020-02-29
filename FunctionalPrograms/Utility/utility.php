<?php
class Utility
{
    /*UserInput function takes the input form the user and prints a hello message.
    */
    public function UserInput()
    {
        $name = readline("Enter Your name  \n");
        //$str stores the user input
        $str = "Hello <<name>>How are You";
        //str_replace is predefined method in php which replaces a string with other string
        $resultString = str_replace('<<name>>', $name, $str);
        echo "$resultString";
    }
    //the getdata method is used to take the input from the user
    public static function getInt(){
        $num=readline(" \n");
        if(is_numeric($num)) 
        //is_numeric used to check wether the user enter the number or anything else
            return $num ;
        else
            echo "Not a Number...try again\n";
    }
    /**
    * function gambler is use to take input form user and gamble 
    * the stack until user win of user lost all money
    * @param $stack total amount user have 
    * @param $goal how much he want to win
    * @param $n number of time he gamble his stack
    */

   static function gambler($stake,$goal,$n)
   {    
       $win = 0;
       $count = 0;
       for($i = 0;$i < $n; $i++)
       {
           $temp = $stake;
           //while loop until user win or loss all stack 
            while($temp != $goal && $temp != 0)
            {
                $count++;
                if ((random_int(0,1))==1) 
                {
                   $temp++;
                } 
                else 
                {
                    $temp--;
                }
                
            }
            if($temp == $goal)
            {
                $win++;
            }

       }
       echo "no of win ".$win."\n";
       echo "count ".$count."\n";
       echo "win percentage ".(($win/$n)*100)."%"."\n";
       echo "loss percentage ".((($n-$win)/$n)*100)."%"."\n";
   }

}
?>
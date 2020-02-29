<?php
 class HarmonicNumbe{
    /*the harmonic method is used to calulate the Harmonic number 
    this method takes one parameter*/
    public function harmonic(){
        $num=readline("Enter the number");
        //the $harmonic variable is used to store the value harmonic number
        $harmonic=0.0;
        for($i=1;$i<=$num;$i++){
            $harmonic=$harmonic+1/$i;
        }
        echo "$harmonic";
    }
}
?>
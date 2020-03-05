
<?php
include 'C:\Users\sneha\Desktop\datastructures\Utility\utility.php';

include 'C:\Users\sneha\Desktop\datastructures\Utility\node.php';
    class Utility
    {
        /**
        * function getInt is method which take user input and 
        * check the input is numeric or not
        * @return $n int type value
        */
        static function getInt()
        {
            fscanf(STDIN,"%d\n",$n);
            while(!is_numeric($n))
            {
                echo "enter numeric value"."\n";
                fscanf(STDIN,"%d\n",$n);
            }
            return $n;     
        }
        //getdata method is used to read data from a file.
    static public function getdata()
    {
        $data=file('C:\Users\sneha\Desktop\datastructures\Utility\data.txt');
        foreach($data as $line)
            $arr=explode(' ',$line);
        return $arr;
    }

        /**
         * function read file is to read file and return in the form of string
         * 
         * @param file path
         * @return string data of file
         */
        static function readFl($file)
        {
            $fileC = fopen($file,"r") or die("unable to open");

            return fread($fileC, filesize($file));
        }

        /**
         * function writeFl file is to write file
         * 
         * @param file path
         * @param $data to store in file
         */
        static function writeFl($data,$file)
        {
            $filec = fopen($file,"w") or die("unable to open");
            fwrite($filec,$data);
        }
    }


?>
<?php

    class RepeatCounter
    {

        function countRepeat($string, $find)
        {
            if ( $string == $find ){
                $output = true;
            }
            else{
                $output = false;
            }

            return $output;
        }//closes countRepeat method
    }//closes class
?>

<?php

    class RepeatCounter
    {

        function countRepeat($string, $find)
        {
            $output_count = 0;
            if ( $string == $find ){
                $output_count += 1;
            }
            else{
                $output_count = false;
            }

            return $output_count;
        }//closes countRepeat method
    }//closes class
?>

<?php

    class RepeatCounter
    {

        function countRepeats($string, $find)
        {
            $output_count = 0;
            $wordsArray = explode(" ",$string);
            foreach ($wordsArray as $word)
                {if ( $word == $find ){
                    $output_count += 1;
                }
            }

            return $output_count;
        }//closes countRepeat method
    }//closes class
?>

<?php
require __DIR__ . '/../../vendor/autoload.php';

class WordAlgs
{
    function palindromeFinderWeb($input)
    {
        //arrays are declared for future use
        $text = $input;
        $members = array();
        $chars = array();
        //input file is converted to an array of different sentences
        $sentences[] = ($text);

        foreach ($sentences as $sentence) {
            //each sentence is placed into its own char array and placed in lowercase
            $words = explode(" ", strtolower($text));
            //regex function is used to strip punctuation (found expression on internet)
            foreach($words as $word) {
                $temp = preg_replace("#[[:punct:]]#", "", $word);
            //set to not include anything shorter than 2 chars
                if(strlen($temp) > 1) {
                    //string is flipped for comparison
                    $revTemp = strrev($temp);
                    if (strcmp($temp, $revTemp) == 0) {
                        echo "found a match for: " . $temp . "<br>";
                    }
                }
            }


        }

    }
    //file version of the above, code is nearly identical
    function palindromeFinderFile($input)
    {
        $file = fopen($input, "r");
        $members = array();
        $chars = array();

        while(!feof($file)) {
            $sentences[] = fgets($file);
        }

        fclose($file);
        foreach ($sentences as $sentence) {

            $words = explode(" ", strtolower($sentence));

            foreach($words as $word) {
                $temp = preg_replace("#[[:punct:]]#", "", $word);

                if(strlen($temp) > 1) {
                    $revTemp = strrev($temp);
                    if (strcmp($temp, $revTemp) == 0) {
                        echo "found a match for: " . $temp . "<br>";
                    }
                }
            }


        }

    }
}
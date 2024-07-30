<?php

/**
* @param Integer $x
* @return Boolean
*/
function isPalindrome($x) {
    $palindrome = strval($x);
    $length = strlen($palindrome);
    $mid_position = intval($length / 2);

    for($i=0, $j=$length-1; $i < $mid_position -1, $j >= $mid_position ;$i++, $j--){
        if($palindrome[$i] != $palindrome[$j]){
            return false;
        }
    }

    return true;
}
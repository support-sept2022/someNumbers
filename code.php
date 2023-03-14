<?php

/* This function takes a positive or negative input number. and have to return its opposite:
7 => -7;
-15 => -15;
 */
function getNegative(int $number): int
{
    /*
    if($number < 0) {
        return $number;
    } else {
        return $number * -1;
    }
    */
    if($number < 0) return $number;

    return $number * -1;
}

/* This function takes a positive or negative input number. and must increment it by 1 if it is positive and decrement it by 1 if it is negative
7 => 8;
-15 => -16;
 */
function incrementOrDecrement(int $number): int
{
    if($number < 0) return --$number;

    return ++$number;
}

/* This function takes a positive or negative input number. and have to count down to 0 if this is negative:
-4, 'Count: -3 -2 -1 0 Boom!'

If the number is positive then the function returns:
S>orry but your number is already = 0
*/
function negativeToZero(int $number): string
{
    if($number >= 0) return "Sorry but your number is already >= 0";

    $result = "Count:";

    for ($i = $number + 1; $i <= 0; $i++) {
        $result .= " $i";
    }

    $result .= " Boom!";

    return $result;
}


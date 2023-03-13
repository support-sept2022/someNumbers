<?php

function negativeToZero(int $number)
{
    if ($number >= 0) {
        return "Sorry but your number is already >= 0";
    }

    $result = '';
    do {
        $result .= ++$number . ' ';
        if ($number === 0) {
            $result .= 'Boom!';
            break;
        }
    } while ($number < 0);

    return "Numbers: $result";
}

<?php

function isPerfect($number)
{
    if ($number <= 0) {
        return false;
    }

    $sumOfDividers = 0;
    for ($divider = 1; $divider <= $number / 2; $divider++) {
        if ($number % $divider === 0) {
            $sumOfDividers += $divider;
        }
    }

    return ($number === $sumOfDividers);
}

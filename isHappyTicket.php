<?php

function isHappy($number)
{
    if (strlen($number) % 2 !== 0) {
        return false;
    }

    $leftPart = 0;
    $rightPart = 0;
    $lastIndex = strlen($number) - 1;

    for ($i = 0; $i < (strlen($number) / 2); $i++) {
        $leftPart += $number[$i];
        $rightPart += $number[$lastIndex];
        $lastIndex--;
    }

    return $leftPart === $rightPart;
}

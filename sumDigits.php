<?php
function sumAllDigits($str)
{
    $sum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += $str[$i];
    }
    return $sum;
}

function addDigits($num)
{
    $result = sumAllDigits((string)$num);

    if (strlen($result) === 1) {
        return (int)$result;
    }

    return addDigits($result);
}

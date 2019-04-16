<?php
function getFixSizeArray($coll, $size)
{
    if ($size > sizeof($coll)) {
        $size = sizeof($coll);
    }
    $result = array();
    for ($i = 0; $i < $size; $i++) {
        $result[] = $coll[$i];
    }
    return $result;
}

function getChunked($coll, $size)
{
    $result = [];
    $decreasingArray = $coll;

    while (!empty($decreasingArray)) {
        $result[] = getFixSizeArray($decreasingArray, $size);
        $decreasingArray = array_slice($decreasingArray, $size);
    }

    return $result;
}

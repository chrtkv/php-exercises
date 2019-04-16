<?php
function longestLengthFromFirstSymbol($coll)
{
    $uniqColl = [];

    foreach ($coll as $item) {
        if (in_array($item, $uniqColl)) {
            return sizeof($uniqColl);
        } else {
            $uniqColl[] = $item;
        }
    }
    return sizeof($uniqColl);
}
function longestLength($string)
{
    $coll = str_split($string);
    $result = 0;

    for ($i = 0; $i + $result < sizeof($coll); $i++) {
        if ($result < longestLengthFromFirstSymbol(array_slice($coll, $i))) {
            $result = longestLengthFromFirstSymbol(array_slice($coll, $i));
        }
    }
    return $result;
}

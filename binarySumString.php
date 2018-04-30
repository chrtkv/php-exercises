<?php
function binarySum($a, $b)
{
    $result = '';
    $aLen = strlen($a);
    $bLen = strlen($b);
    $newA = $a;
    $newB = $b;
    $howManyZeros = abs($aLen - $bLen);
    $highBit = '';
    if ($aLen > $bLen) {
        while ($howManyZeros > 0) {
            $newB = '0' . $newB;
            $howManyZeros--;
        }
    } elseif ($bLen > $aLen) {
        while ($howManyZeros > 0) {
            $newA = '0' . $newA;
            $howManyZeros--;
        }
    }
    for ($i = strlen($newA) - 1; $i >= 0; $i--) {
        if ($newA[$i] + $newB[$i] === 0) {
            if ($highBit === '1') {
                $result = '1' . $result;
                $highBit = '0';
            } else {
                $result = '0' . $result;
            }
        }
        if ($newA[$i] + $newB[$i] === 1) {
            if ($highBit === '1') {
                $result = '0' . $result;
                $highBit = '1';
            } else {
                $result = '1' . $result;
            }
        }
        if ($newA[$i] + $newB[$i] === 2) {
            if ($highBit === '1') {
                $result = '1' . $result;
                $highBit = '1';
            } else {
                $result = '0' . $result;
                $highBit = '1';
            }
        }
    }
    if ($highBit === '1') {
        $result = '1' . $result;
    }
    return $result;
}

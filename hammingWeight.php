<?php
function hammingWeight($num)
{
    $bin = decbin($num);
    $arr = str_split($bin);
    $result = 0;
    foreach ($arr as $el) {
        if ($el === '1') {
            $result++;
        }
    }
    return $result;
}

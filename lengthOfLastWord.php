<?php
function lengthOfLastWord($str)
{
    $str = trim($str);
    $arr = explode(' ', $str);
    return strlen($arr[count($arr) - 1]);
}

<?php

function isSymmetric($string)
{
    $lastIndex = strlen($string) - 1;
    for ($i = 0; $i < strlen($string) / 2; $i++) {
        if ($string[$i] === '(' && $string[$lastIndex] === ')') {
            $lastIndex--;
        } else {
            return false;
        }
    }
    return true;
}

function normalizeString($string)
{
    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === '(' && $string[$i + 1] === ')') {
            $i++;
        } else {
            $result .= $string[$i];
        }
    }
    return $result;
}

function isBalanced($brackets)
{
    $lastIndex = strlen($brackets) - 1;
    
    if (isSymmetric($brackets)) {
        return true;
    } elseif ($brackets[$lastIndex] === '(' || $brackets[0] === ')') {
        return false;
    }

    return isBalanced(normalizeString($brackets));
}

<?php
function calc($operator, $a, $b)
{
    switch ($operator) {
        case '*':
            return $a * $b;
        case '+':
            return $a + $b;
        case '-':
            return $b - $a;
        case '/':
            return $b / $a;
    }
}
function calcInPolishNotation($polish)
{
    $stack = [];
    foreach ($polish as $element) {
        if (is_numeric($element)) {
            array_push($stack, $element);
        } else {
            $calculation = calc($element, array_pop($stack), array_pop($stack));
            array_push($stack, $calculation);
        }
    }
    return array_pop($stack);
}

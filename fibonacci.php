function fibonacci($num)
{
    if ($num === 0 || $num === 1) {
        return $num;
    }
    $first = 0;
    $next = 1;
    $fib = 0;
    for ($i = $num; $i > 1; $i--) {
        $fib = $first + $next;
        $first = $next;
        $next = $fib;
    }
    return $fib;
}

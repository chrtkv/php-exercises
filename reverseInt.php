function reverseInt($num)
{
    $result = (int) strrev((string) abs($num));
    return $num > 0 ? $result : -$result;
}

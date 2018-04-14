<?php
function isPowerOfThree($num)
{
   if ($num === 1) {
        return true;
   }
   if ($num % 3 !== 0 || $num < 1) {
        return false;
   }
   return isPowerOfThree($num / 3);
}

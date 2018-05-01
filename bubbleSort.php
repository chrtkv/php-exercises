<?php
function bubble($array)
{
  $size = sizeof($array);
  do {
    $swap = false;
    for ($i = 0; $i < $size - 1; $i++) {
      if ($array[$i] > $array[$i + 1]) {
        $temp = $array[$i];
        $array[$i] = $array[$i + 1]; 
        $array[$i + 1] = $temp;
        $swap = true;
      }
    }
    $size--;
  } while ($swap);
  return $array;
}

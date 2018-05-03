<?php
function factorial($x)
{
	$counter = 1;
	$factorial = 1;
	do {
		$factorial *= $counter;
		$counter++;
	} while ($counter <= $x);
	return $factorial;
}
echo factorial($argv[1]);
echo "\n";

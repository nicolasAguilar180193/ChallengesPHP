<?php

declare(strict_types=1);


/**
 * Calculates the minimum and maximum sums of an array.
 *
 * @param array $arr The input array.
 * @throws None
 * @return void
 */
function miniMaxSum($arr)
{
	$min_sum = PHP_INT_MAX;
	$max_sum = PHP_INT_MIN;
	$total_sum = array_sum($arr);
	
	foreach ($arr as $value) {
		$parcial_sum = $total_sum - $value;
		
		if ($parcial_sum > $max_sum) {
			$max_sum = $parcial_sum;
		}
		
		if ($parcial_sum < $min_sum) {
			$min_sum = $parcial_sum;
		}
	}
	
	echo $min_sum . ' ' . $max_sum;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

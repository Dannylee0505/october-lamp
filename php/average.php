<?php

$numbers = array(34,5,777,33,4,5);
function print_average($array)
{
	$total = count($array);
	foreach ($array as $value)
	{
		$total = $total + $value;
		echo $total.'<br>';
	}
	$average = $total / $number_of_value;

	return $average;
}
$numbers = array( 34,5,777,33,4,5) (10,10,10);

$average = compute_average($numbers);
echo $average;

?>
<?php 
//Project Euler Problem 001 
$sum = 0;
for ($i=0; $i < 1000; $i++) { 
	if (!($i % 3) || !($i % 5)) {
		$sum = $sum + $i;
	}
}
echo $sum;
<?php

function numSumm($a,$b) {
	return $a + $b;
}

function numDiff($a,$b) {
	return $a - $b;
}

function numMult($a,$b) {
	return $a * $b;
}

function numDiv($a,$b) {
	return $a / $b;
}

function numMultiaction($a, $b, $op) {
	switch ($op) {
		case $op == "Summ":
			$x = numSumm($a,$b);
			break;		
			case $op == "Diff":
			$x = numDiff($a,$b);
			break;		
			case $op == "Mult":
			$x = numMult($a,$b);
			break;		
			case $op == "Div":
			$x = numDiv($a,$b);
			break;
	}
	return $x;
}

echo numMultiaction(5, 5, "Mult");

?>
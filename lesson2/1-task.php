<?php

$a = 5;
$b = 10;

if (a >= 0 && b >= 0) {
	if (a >= b) {
		x = a - b;
	} else {
		x = b - a;
	}
}	elseif (a < 0 && b < 0) {
	x3 = a * b;
} elseif ((a >= 0 && b < 0) || (a < 0 && b >= 0)) {
		x = a + b;
}
echo x;

?>
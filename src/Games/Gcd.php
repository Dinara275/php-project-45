<?php

namespace src\Games\Gcd;
use function phpProject45\src\Engine\describe;
use function cli\line;
use function cli\prompt;

function divide()
{
	$gamePurpose = 'Find the greatest common divisor of given numbers.';
	$round = function () {
		$a = rand(0, 100);
		$b = rand(0, 100);
		$answer = (int)prompt("Question: {$a} {$b}");
		line("Your answer: {$answer}");
		if ($a > $b) {
			$c = $b;
		} else {
			$c = $a;
		}
		$correctAnswer = 1;
		for ($j = 0; $j < 3; $j++) {
		for ($i = 1; $i <= $c; $i++) {
			if ((($a % $i) === 0) and (($b % $i) === 0) and ($i > $correctAnswer)) {
			$correctAnswer = $i;
			}
		}
		}
		 
return [$answer, $correctAnswer];
	};
		describe($gamePurpose, $round);
}




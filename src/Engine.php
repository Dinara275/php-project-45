<?php

namespace phpProject45\src\Engine;

use function cli\line;
use function cli\prompt;

function describe($gamePurpose, $round)
{
	line("Welcome to the Brain Games!");
	$name = prompt("May I have your name?");
	line("Hello, %s!", $name);
	line($gamePurpose);
	 global $answer;
	 global $correctAnswer;
	[$answer, $correctAnswer] = $round();
	for ($i = 0; $i < 3; $i++) {
		$round = [$answer, $correctAnswer];
	       	if ($answer === $correctAnswer) {
			line('Correct!');
		} else {
			line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
			line("Let's try again, %s!", $name);
		return;
		}
	}
	line("Congratulations, %s!", $name);
}


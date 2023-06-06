<?php

namespace phpProject45\src\Engine;

use function cli\line;
use function cli\prompt;
use function src\Games\Gcd\divide;

function describe($gamePurpose, $round)
{
	line("Welcome to the Brain Games!");
	$name = prompt("May I have your name?");
	line("Hello, %s!", $name);
	line($gamePurpose);
	for ($i = 0; $i < 3; $i++) {
		[$answer, $correctAnswer] = $round();
		 var_dump('answer: ' . $answer);
		 var_dump('correctAnswer: ' . $correctAnswer);
		if ((int)$answer === (int)$correctAnswer) {
			line('Correct!');
		} else {
			line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
			line("Let's try again, %s!", $name);
		return;
		}	  
       	}       	
line("Congratulations, %s!", $name);
}


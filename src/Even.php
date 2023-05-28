<?php

namespace phpProject45\src\Even;

use function cli\line;
use function cli\prompt;

function welcome($name)
{
	line("Welcome to the Brain Games!");
	$name = prompt("May I have your name?");
	line("Hello, %s!", $name);
	line('Answer "yes" if the number is even, otherwise answer "no".');
}
function play()
{
	for ($i = 0; $i < 3; $i++) {
		$number = rand();
	        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
		$answer = prompt("Question: {$number}");
		line("Your answer: {$answer}");
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


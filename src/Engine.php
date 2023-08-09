<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function start(string $gamePurpose, callable $getRound)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    line($gamePurpose);

    for ($i = 0; $i < ROUNDS; $i++) {
        [$answer, $correctAnswer] = $getRound();
	line("Your answer: {$answer}");
        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Correct!");
    line("Congratulations, %s!", $name);
}

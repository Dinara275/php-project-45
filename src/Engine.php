<?php

namespace src\Engine;

use function cli\line;
use function cli\prompt;
use function src\Games\Gcd\divide;
use function src\Games\Calc\calculate;

const ROUNDS = 3;

function start($gamePurpose, $round)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    
    line($gamePurpose);

    for ($i = 0; $i < ROUNDS; $i++) {
        [$answer, $correctAnswer] = $round();

        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Correct!");
    line("Congratulations, %s!", $name);
}

<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

function solve()
{
        $gamePurpose = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        $round = function () {
            $a = rand(1, 100);
            $answer = prompt("Question: {$a}");
            line("Your answer: {$answer}");
            $correctAnswer = isPrime($a) ? 'yes' : 'no';
            return [$answer, $correctAnswer];
        };
    start($gamePurpose, $round);
}
function isPrime(int $a): bool
{
    if ($a < 2) {
        return false;
    }
    for ($i = 2; $i <= $a / 2; $i++) {
        if ($a % $i === 0) {
            return false;
        }
    }
    return true;
}

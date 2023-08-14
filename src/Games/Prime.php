<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

function playPrime()
{
    $gamePurpose = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $round = function () {
        $num = rand(1, 100);
        $answer = prompt("Question: {$num}");
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}
function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

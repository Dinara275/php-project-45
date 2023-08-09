<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function playGcd()
{
    $gamePurpose = 'Find the greatest common divisor of given numbers.';
    $round = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $answer = (int)prompt("Question: {$num1} {$num2}");
        $correctAnswer = findCommonDivider($num1, $num2);
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

function findCommonDivider(int $num1, int $num2)
{
    if ($num1 > $num2) {
        $num3 = $num2;
    } else {
        $num3 = $num1;
    }
    $correctAnswer = 1;
    for ($i = 1; $i <= $num3; $i++) {
        if ((($num1 % $i) === 0) and (($num2 % $i) === 0) and ($i > $correctAnswer)) {
            $correctAnswer = $i;
        }
    }
    return $correctAnswer;
}

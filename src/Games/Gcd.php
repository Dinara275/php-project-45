<?php

namespace src\Games\Gcd;

use function src\Engine\start;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function divide()
{
    $gamePurpose = 'Find the greatest common divisor of given numbers.';
    $round = function () {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $answer = (int)prompt("Question: {$a} {$b}");
        line("Your answer: {$answer}");
        if ($a > $b) {
            $c = $b;
        } else {
            $c = $a;
        }
        $correctAnswer = 1;
        for ($j = 0; $j < ROUNDS; $j++) {
            for ($i = 1; $i <= $c; $i++) {
                if ((($a % $i) === 0) and (($b % $i) === 0) and ($i > $correctAnswer)) {
                    $correctAnswer = $i;
                }
            }
        }
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

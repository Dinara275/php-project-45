<?php

namespace src\Games\Calc;

use function src\Engine\start;
use function cli\line;
use function cli\prompt;

function calculate()
{
    $gamePurpose = 'What is the result of the expression?';
    $round = function () {
        $a = rand(0, 100);
        $b = rand(0, 100);
        $operation = ['+', '-', '*'];
        $operationChoice = array_rand($operation, 1);
        $finalOperation = $operation[$operationChoice];
        $expression = "{$a} {$finalOperation} {$b}";
        $answer = (int)prompt("Question: {$expression}");
        line("Your answer: {$answer}");
        if ($finalOperation === '+') {
            $correctAnswer = ($a + $b);
        } elseif ($finalOperation === '-') {
            $correctAnswer = ($a - $b);
        } else {
            $correctAnswer = ($a * $b);
        }
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

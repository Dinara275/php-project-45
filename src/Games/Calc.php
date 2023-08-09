<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

function calculate()
{
    $gamePurpose = 'What is the result of the expression?';
    $round = function () {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $operation = ['+', '-', '*'];
        $operationChoice = array_rand($operation, 1);
        $finalOperation = $operation[$operationChoice];
        $expression = "{$num1} {$finalOperation} {$num2}";
        $answer = (int)prompt("Question: {$expression}");
        switch ($finalOperation) {
            case '+':
                $correctAnswer = ($num1 + $num2);
                break;
            case '-':
                $correctAnswer = ($num1 - $num2);
                break;
            case '*':
                $correctAnswer = ($num1 * $num2);
                break;
            default:
                throw new Error ('Uknown state!');
        }
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

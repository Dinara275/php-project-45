<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

function playProgression()
{
    $gamePurpose = 'What number is missing in the progression?';
    $round = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $arr = range($num1, 50, $num2);
        $index = array_rand($arr);
        $arr[$index] = '..';
        $arr_view = implode(' ', $arr);
        $answer = (int)prompt("Question: {$arr_view}");
        if ($index !== count($arr) - 1) {
            $correctAnswer = (int) $arr[$index + 1] - $num2;
        } elseif ($index === 0) {
            $correctAnswer = $num1;
        } else {
            $correctAnswer = (int) $arr[$index - 1] + $num2;
        }
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

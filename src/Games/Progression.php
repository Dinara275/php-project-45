<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

function solve()
{
    $gamePurpose = 'What number is missing in the progression?';
    $round = function () {
        $a = rand(1, 10);
        $c = rand(1, 10);
        $arr = range($a, 50, $c);
        $index = array_rand($arr);
        $arr[$index] = '..';
        $arr_view = implode(' ', $arr);
        $answer = (int)prompt("Question: {$arr_view}");
        line("Your answer: {$answer}");
        if ($index !== count($arr) - 1) {
            $correctAnswer = (int) $arr[$index + 1] - $c;
        } elseif ($index === 0) {
            $correctAnswer = $a;
        } else {
            $correctAnswer = (int) $arr[$index - 1] + $c;
        }
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

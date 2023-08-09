<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function isEven()
{
    $gamePurpose = 'Answer "yes" if the number is even, otherwise answer "no".';
    $round = function () {
        $number = rand();
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        $answer = prompt("Question: {$number}");
        return [$answer, $correctAnswer];
    };
    start($gamePurpose, $round);
}

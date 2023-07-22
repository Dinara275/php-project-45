<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\start;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function play()
{
    $gamePurpose = 'Answer "yes" if the number is even, otherwise answer "no".';
    $round = function () {
        for ($i = 0; $i < ROUNDS; $i++) {
            $number = rand();
            $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
            $answer = prompt("Question: {$number}");
            line("Your answer: {$answer}");
            return [$answer, $correctAnswer];
        }
    };
    start($gamePurpose, $round);
}

<?php

namespace phpProject45\src\Even;

use function phpProject45\src\Engine\describe;
use function cli\line;
use function cli\prompt;

function play()
{
    $gamePurpose = 'Answer "yes" if the number is even, otherwise answer "no".';
    $round = function () {
        for ($i = 0; $i < 3; $i++) {
            $number = rand();
            $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
            $answer = prompt("Question: {$number}");
            line("Your answer: {$answer}");
            return [$answer, $correctAnswer];
        }
    };
    describe($gamePurpose, $round);
}

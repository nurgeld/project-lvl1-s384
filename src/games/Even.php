<?php

namespace BrainGames\games\Even;

use function BrainGames\Cli\play;

function isEven($num)
{
    return $num % 2 == 0;
}

function run()
{
    $gamePromt = 'Answer "yes" if number even otherwise answer "no".';
    
    $even = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play($gamePromt, $even);
}

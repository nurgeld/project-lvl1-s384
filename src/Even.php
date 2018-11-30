<?php

namespace BrainGames\Even;

function isEven($num)
{
    return $num % 2 == 0;
}

function gameEven()
{
    $gamePromt = 'Answer "yes" if number even otherwise answer "no".';
    $generateRandNum = function () {
        return rand(1, 100);
    };
    $question = $generateRandNum();
    $correctAnswer = isEven($question) ? 'yes' : 'no';

    return [
        'gamePromt' => $gamePromt,
        'question' => $question,
        'correctAnswer' => $correctAnswer
    ];
}

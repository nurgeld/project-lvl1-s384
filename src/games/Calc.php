<?php

namespace BrainGames\games\Calc;

use function BrainGames\Cli\play;

function run()
{
    $gamePromt = 'What is the result of the expression?';

    $calc = function ()
    {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $operations = ['+', '-', '*'];
        $operator = $operations[rand(0, 2)];

        $question = "{$num1} {$operator} {$num2}";

        switch ($operator) {
            case "+":
                $correctAnswer = $num1 + $num2;
                break;
            case "-":
                $correctAnswer = $num1 - $num2;
                break;
            case "*":
                $correctAnswer = $num1 * $num2;
                break;
        }

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    return play([
        'gamePromt' => $gamePromt,
        'gameType' => $calc
    ]);
}
/*
function run() use ($gamePromt)
{
    return play([
        'gamePromt' => $gamePromt,
        'game' => $CalcLogic
    ]);
}

play([
    'gamePromt' => $gamePromt,
    'game' => $CalcLogic
]);
*/

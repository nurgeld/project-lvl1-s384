<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Cli\play;

function gcd($num1, $num2)
{
    if (!$num2) {
        return $num1;
    }

    return gcd($num2, $num1 % $num2);
}

function run()
{
    $gamePromt = 'Find the greatest common divisor of given numbers.';

    $guessGcd = function () {
        $num1 = rand(3, 900);
        $num2 = rand(3, 900);
        $question = "{$num1} {$num2}";
        $correctAnswer = gcd($num1, $num2);

        return [$question, $correctAnswer];
    };
    
    play($gamePromt, $guessGcd);
}

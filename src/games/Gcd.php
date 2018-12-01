<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Cli\play;

function getGcd($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    }

    return getGcd($num2, $num1 % $num2);
}

function run()
{
    $gamePrompt = 'Find the greatest common divisor of given numbers.';

    $gcd = function () {
        $num1 = rand(3, 900);
        $num2 = rand(3, 900);
        $question = "{$num1} {$num2}";
        $correctAnswer = getGcd($num1, $num2);

        return [$question, $correctAnswer];
    };
    
    play($gamePrompt, $gcd);
}

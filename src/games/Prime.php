<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\play;

function isPrime($num)
{
    if ($num == 1) {
        return false;
    }

    for ($i = 2; $i ** 2 <= $num; $i += 1) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function run()
{
    $gamePrompt = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $prime = function () {
        $num = rand(1, 100);
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play($gamePrompt, $prime);
}

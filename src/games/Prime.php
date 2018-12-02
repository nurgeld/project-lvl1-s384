<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\play;

function isPrime($num, $curr = 2)
{
    if ($curr ** 2 > $num) {
        return true;
    }
    if ($num % $curr == 0) {
        return false;
    }

    return isPrime($num, $curr + 1);
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

<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\play;

function isPrime($num)
{
    function iter($curr, $num)
    {
        if ($curr ** 2 > $num) {
            return true;
        }
        if ($num % $curr == 0) {
            return false;
        }

        return iter($curr + 1, $num);
    }
    return iter(2, $num);
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

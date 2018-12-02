<?php

namespace BrainGames\games\Progression;

use function BrainGames\Cli\play;

function elementOfProgression($a1, $d, $n)
{
    return $a1 + (($n - 1) * $d);
}

function run()
{
    $gamePromt = 'What number is missing in the progression?';

    $progression = function () {
        $a1 = rand(1, 10);
        $d = rand(1, 10);
        $n = 10;
        $randIndex = rand(1, 9);
        $correctAnswer = elementOfProgression($a1, $d, $randIndex);

        function iter2($curr, $a1, $d, $n, $randIndex, $question, $correctAnswer)
        {
            if ($curr == $n) {
                $questionString = implode(' ', $question);
                return [$questionString, $correctAnswer];
            }
            $element = elementOfProgression($a1, $d, $curr);
            $question[] = ($curr == $randIndex) ? ".." : $element;
            return iter2($curr + 1, $a1, $d, $n, $randIndex, $question, $correctAnswer);
        }
        return iter2(1, $a1, $d, $n, $randIndex, [], $correctAnswer);
    };

    play($gamePromt, $progression);
}

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
        $array = [];
        $i = 0;
        while ($i < $n) {
            if ($i == $randIndex) {
                $array[] = '..';
            } else {
                $array[] = elementOfProgression($a1, $d, $i);
            }
            $i += 1;
        }

        $question = implode(' ', $array);
        return [$question, $correctAnswer];
    };
        /*
        function iter($curr, $a1, $d, $n, $randIndex, $question, $correctAnswer)
        {
            if ($curr = $n) {
                $questionString = implode(' ', $question);
                return [$questionString, $correctAnswer];
            }
            $element = elementOfProgression($a1, $d, $curr);
            $question[] = ($curr == $randIndex) ? ".." : $element;
            return iter($curr + 1, $a1, $d, $n, $randIndex, $question, $correctAnswer);
        }
        return iter(1, $a1, $d, $n, $randIndex, [], $correctAnswer);
    };*/

    play($gamePromt, $progression);
}

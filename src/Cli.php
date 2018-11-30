<?php

namespace BrainGames\Cli;

use function \cli\line;
use function BrainGames\Even\gameEven;

function run()
{
    line('Welcome to the Brain Game!');
    line('');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function runEven()
{
    line('Welcome to the Brain Game!');

    $game = gameEven();
    line($game['gamePromt']);
    line('');

    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('');

    $steps = 3;

    while ($steps > 0) {
        $game = gameEven();
        $question = $game['question'];
        line("Question: %s", $question);
        $correctAnswer = $game['correctAnswer'];
        $answer = \cli\prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}");
            break;
        }
        $steps -= 1;

        if ($steps <= 0) {
            line("Congratulations, {$name}!");
        }
    }
}

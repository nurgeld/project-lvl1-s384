<?php

namespace BrainGames\Cli;

use function \cli\line;

function play($gamePromt, $game)
{
    line('Welcome to the Brain Game!');

    line($gamePromt);
    line('');

    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('');

    $steps = 3;

    while ($steps > 0) {
        $gameParts = $game();
        
        $question = $gameParts[0];
        $correctAnswer = $gameParts[1];
        line("Question: %s", $question);
        
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

function run()
{
    line('Welcome to the Brain Game!');
    line('');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}

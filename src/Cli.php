<?php

namespace BrainGames\Cli;

use function \cli\line;

function play($gamePrompt, $game)
{
    line('Welcome to the Brain Game!');

    line($gamePrompt);
    line('');

    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('');

    $steps = 3;

    function iter($acc, $game, $name)
    {
        if ($acc == 0) {
            line("Congratulations, {$name}!");
            return;
        }
        
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
            return;
        }

        return iter($acc - 1, $game, $name);
    }

    return iter($steps, $game, $name);
}

function run()
{
    line('Welcome to the Brain Game!');
    line('');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}

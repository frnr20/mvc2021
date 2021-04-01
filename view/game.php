<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

// use Frnr20\Dice\Dice;
// use Frnr20\Dice\DiceHand;

$header = $header ?? null;
$message = $message ?? null;

// $die = new \Frnr20\Dice\Dice();

// $diceHand = new \Frnr20\Dice\DiceHand();

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<p> This is a Game, first dice: </p>
<p><?= $dieLastRoll ?></p>

<p> This is a Game, more dices: </p>
<p><?= $diceHandRoll ?></p>

<p> This is a Game, more dices: </p>
<p><?= $diceHandRoll1 ?></p>
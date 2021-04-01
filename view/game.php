<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

$die = new \Frnr20\Dice\Dice();

$die->roll();

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<p> This is a Game </p>

<p><?= $die->getLastRoll() ?></p>
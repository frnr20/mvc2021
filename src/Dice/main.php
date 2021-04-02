<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Frnr20\Dice\Dice;

$dice = new Dice();

for ($i = 0; $i < 9; $i++) {
    $dice->roll();
    echo $dice->getLastRoll() . ", ";
}
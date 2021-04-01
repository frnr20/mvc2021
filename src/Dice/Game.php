<?php

declare(strict_types=1);

namespace Frnr20\Dice;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use Frnr20\Dice\Dice;
use Frnr20\Dice\DiceHand;

/**
 * Class Game.
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "This is a Game",
            "message" => "Hey you gamer!!",
        ];

        $die = new Dice();
        $die->roll();

        $diceHand = new DiceHand();
        $diceHand->roll();

        $data["dieLastRoll"] = $die->getLastRoll();
        $data["diceHandRoll"] = $diceHand->getLastRoll();

        $diceHand->roll();
        $data["diceHandRoll1"] = $diceHand->getLastRoll();

        $body = renderView("layout/game.php", $data);
        sendResponse($body);
    }
}

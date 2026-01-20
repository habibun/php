<?php

/**
 * Short Description
 * Asymmetric Visibility lets you control WHO can read a property and WHO can write to it separately. Think of it like a display case in a museum: everyone can SEE the artifact (read), but only the museum staff can TOUCH it (write). You write public private(set) to say "everyone can read, only this class can write."
 * In other words: Make a property publicly readable but privately writable - all in one line!
 */

// OLD WAY (PHP 8.3) - Lots of Extra Code
class Player
{
    // Hide the score - nobody can touch it
    private int $score = 0;

    // Want to SEE the score? Use this function
    public function getScore(): int
    {
        return $this->score;
    }

    // ONLY the class can change the score (no public setter!)
    public function addPoints(int $points): void
    {
        $this->score += $points;
    }
}

// Using it:
$player = new Player();
$player->addPoints(10);              // Add points through method

echo $player->getScore();            // Read: 10
// But you MUST use getScore()

// Can't do this:
// $player->score = 999999;          // ❌ Can't access - it's private
// echo $player->score;               // ❌ Can't read - it's private


// NEW WAY (PHP 8.4) - Asymmetric Visibility! 🎉
class Player
{
    // Everyone can READ, only class can WRITE
    public private(set) int $score = 0;
    //     ^^^^^^^^^^^^  This means "private for writing"

    public function addPoints(int $points): void
    {
        $this->score += $points;  // ✅ Works - we're inside the class
    }
}

// Using it - SO MUCH EASIER:
$player = new Player();
$player->addPoints(10);

echo $player->score;          // ✅ Read it directly: 10
// No need for getScore()!

// But you CAN'T cheat:
$player->score = 999999;      // ❌ Error! Only the class can write

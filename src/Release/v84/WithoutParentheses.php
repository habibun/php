<?php

/**
 * Short Description
 * You can now create objects without empty parentheses () when the class doesn't need any starting values. Instead of writing new Car(), you can just write new Car. It's cleaner and less typing, especially when you're chaining methods (calling multiple functions in a row).
 * In other words: Skip the () when you're not passing anything into them anyway!
 */


// Example

// OLD WAY (PHP 8.3) - Always Need ()
class Car
{
    public function start(): self
    {
        echo "Car started! 🚗\n";
        return $this;
    }

    public function drive(): self
    {
        echo "Car driving! 🏎️\n";
        return $this;
    }
}

// Creating a new car - MUST use ()
$car = new Car();

// Using it
$car->start();
$car->drive();

// Chaining methods - looks awkward with double ()
(new Car())->start()->drive();
//        ^^  These empty () look weird!


// NEW WAY (PHP 8.4) - Skip () When Empty! 🎉
class Car
{
    public function start(): self
    {
        echo "Car started! 🚗\n";
        return $this;
    }

    public function drive(): self
    {
        echo "Car driving! 🏎️\n";
        return $this;
    }
}

// Creating a new car - NO () needed!
$car = new Car;  // ✅ Clean!

// Using it
$car->start();
$car->drive();

// Chaining methods - looks much cleaner!
new Car->start()->drive();
//     ^  No awkward double parentheses!


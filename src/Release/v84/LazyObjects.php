<?php

/**
 * Lazy Objects
 * What it is: A way to create an object that is "hollow" at first. It only fills itself with data (initializes) the very moment you actually try to use it. This is great for "heavy" objects like database connections or complex API data that you might not always need.
 *
 * Old Version: To do this, you had to write a lot of "boilerplate" code or use complex libraries (like Doctrine's Proxy). You’d often have to check if ($this->data === null) { $this->load(); } inside every single method.
 *
 * PHP 8.4 (New): PHP handles the "hollowness" for you. The object acts like a normal object, but its real code only runs when you touch a property or method.
 */

class HeavyService {
    public string $data;
    public function __construct() {
        // Imagine this takes 5 seconds to load
        $this->data = "Big Data Loaded!";
    }
}

// PHP 8.4: Create a "Ghost" of the class
$reflector = new ReflectionClass(HeavyService::class);
$lazyObj = $reflector->newLazyGhost(function ($instance) {
    // This code ONLY runs when you access $lazyObj->data
    $instance->__construct();
});

// Right now, $lazyObj is "empty". No heavy work has been done yet.
echo "Object created, but not loaded yet...";

// Touching the property triggers the magic:
echo $lazyObj->data; // OUTPUT: Big Data Loaded!


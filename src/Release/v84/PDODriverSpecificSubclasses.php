<?php
/**
 * 📌 Short Description
 *
 * Old: You always got a plain PDO object (new PDO(...)), and some drivers added hidden methods/constants like PDO::sqliteCreateFunction(). This was surprising and unsafe (IDE/tooling couldn’t know what’s available).
 *
 * New (PHP 8.4): PDO now has driver‑specific subclasses (e.g., Pdo\MySql, Pdo\Pgsql, Pdo\Sqlite). You can use PDO::connect() to create the right subclass automatically. These classes expose driver‑specific methods cleanly and safely.
 */


// ======================
// OLD WAY (pre‑PHP 8.4)
// ======================
$pdo = new PDO('sqlite:foo.db');
// You could call driver‑specific methods on PDO that “just existed”:
$pdo->sqliteCreateFunction(
    'hello',
    fn($str) => "Hello $str"
);
$result = $pdo->query("SELECT hello('world')")->fetchAll();

// ======================
// NEW WAY (PHP 8.4+)
// ======================

// Use PDO::connect to get the correct subclass automatically
$db = PDO::connect('sqlite:foo.db');

// Now $db is a Pdo\Sqlite object
$db->createFunction(
    'hello',
    fn($str) => "Hello $str"
);
$result2 = $db->query("SELECT hello('world')")->fetchAll();


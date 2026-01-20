<?php
/**
 * 📌 Short Description
 *
 * Old way (pre‑8.4): PDO had one generic SQL parser used for all drivers. It was modeled around MySQL syntax and could misinterpret queries for other SQL dialects (e.g., PostgreSQL’s dollar‑quoted strings), leading to placeholder miscounts or bugs.
 *
 * New way (PHP 8.4+): PDO supports driver‑specific parsers. Each database driver can provide its own scanner that correctly understands that driver’s quoting rules and syntax, so placeholders are detected accurately. When a driver doesn’t supply a custom parser, PDO falls back to a standard parser that supports basic SQL syntax.
 */


// Old (pre‑8.4):
// PDO used the same SQL scanner for every database.
// Some valid queries with backslashes, dollar quotes, or
// other dialect specifics could confuse the parser.

// New (PHP 8.4+):
// PDO uses a driver‑specific parser when available.
// For MySQL, PGSQL, SQLite, etc., PDO understands
// literals and comments correctly per that database’s syntax.

// Example (PostgreSQL with dollar quotes):
$pdo = new PDO('pgsql:host=...;dbname=...;', 'user', 'pass');
// Previously there were bugs parsing queries like:
$sql = "SELECT $$this$$, ?"; // dollar‑quoted strings
$stmt = $pdo->prepare($sql);
$stmt->execute([123]);
// Now the PGSQL driver’s parser correctly identifies
// the `?` placeholder because it knows dollar‑quotes.

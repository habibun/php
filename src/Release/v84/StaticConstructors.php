<?php
/**
 * 📌 Short Description
 *
 * Old way: Create a DateTime object and then call $dt->setTimestamp($timestamp).
 *
 * New way (PHP 8.4): Use DateTime::createFromTimestamp($timestamp) or DateTimeImmutable::createFromTimestamp($timestamp) directly.
 *
 * Cleaner, shorter, and more readable.
 */


$timestamp = 1700000000; // example Unix timestamp

// ======================
// OLD WAY (pre-PHP 8.4)
// ======================
$dt_old = new DateTime();
$dt_old->setTimestamp($timestamp);
echo "Old DateTime: " . $dt_old->format('Y-m-d H:i:s') . "\n";

// For immutable
$dt_imm_old = new DateTimeImmutable();
$dt_imm_old = $dt_imm_old->setTimestamp($timestamp);
echo "Old DateTimeImmutable: " . $dt_imm_old->format('Y-m-d H:i:s') . "\n";

// ======================
// NEW WAY (PHP 8.4+)
// ======================
$dt_new = DateTime::createFromTimestamp($timestamp);
echo "New DateTime: " . $dt_new->format('Y-m-d H:i:s') . "\n";

$dt_imm_new = DateTimeImmutable::createFromTimestamp($timestamp);
echo "New DateTimeImmutable: " . $dt_imm_new->format('Y-m-d H:i:s') . "\n";


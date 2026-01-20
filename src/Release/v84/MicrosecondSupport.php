<?php
/**
 * 📌 Short Description
 *
 * Old way: You could only get or set microseconds by formatting strings (u) or manually adjusting the timestamp.
 *
 * New way:
 *
 * getMicrosecond() → returns the microsecond part (0–999999)
 *
 * setMicrosecond($microsecond) → sets the microsecond part directly
 */


// ======================
// OLD WAY (pre-PHP 8.4)
// ======================
$dt_old = new DateTime();
echo "Old microseconds: " . $dt_old->format('u') . "\n";

// To set microseconds, you had to do something like:
$dt_old->modify('+123456 microseconds'); // clunky workaround

// ======================
// NEW WAY (PHP 8.4+)
// ======================
$dt_new = new DateTime();
$dt_new->setMicrosecond(123456);             // set microseconds directly
echo "New microseconds: " . $dt_new->getMicrosecond() . "\n";

// For immutable
$dt_imm_new = new DateTimeImmutable();
$dt_imm_new = $dt_imm_new->setMicrosecond(987654);
echo "Immutable microseconds: " . $dt_imm_new->getMicrosecond() . "\n";


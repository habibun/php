<?php
/**
 * htmlspecialchars
 *
 * Convert special characters to HTML entities
 */

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
var_dump($new);  // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;


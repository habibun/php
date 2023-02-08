<html>
<head>
<title> Array Functions</title>
    </head>
    <body>
    <?php $array1 = array(4,8,15,16,23,42); ?>
    Count: <?php echo count($array1); ?><br />
    Max value: <?php echo max($array1); ?><br />
    Min value:<?php echo min($array1); ?><br />
    <br />
    Sort: <?php sort($array1); print_r($array1); ?><br />
    Reverse Sort: <?php rsort($array1); print_r($array1); ?><br />
    <br />
    <?php
    // Implode converts an array into a string using a "join string"
    // Explode converts a string into an array using a "divide string"
    ?>
    Implode: <?php echo $string1 = implode(" * ", $array1); ?><br />
    Explode: <?php print_r(explode(" * ", $string1)); ?><br />
    <br />
    In array: <?php echo in_array(15, $array1); // returns T/F ?><br />
    </body>
</html>
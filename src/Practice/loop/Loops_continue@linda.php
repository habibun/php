<html>
<head>
    <title>Loops: continue </title>
</head>
<body>
<?php /* continue
Imagine that every loop has an implicit "continue" at the end
You can also have an explicit "continue" which will loop back to the top immediately
i.e. skip the remaining statements and start the next cycle of the loop
Useful if you can quickly determine that the rest of the loop contents won't apply
If you can, it could speed up your loop!
*/ ?>
<?php
// skips the number 5
for ($count=0; $count <= 10; $count++) {
    if ($count == 5) {
        continue;
    }
    echo $count . ", ";
}
?>
</body>
</html>
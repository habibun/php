<html>
<head>
    <title>Include</title>
</head>
<body>
<?php
// inserts the contents of the file "included_func.php" as if
// those same lines had been typed here.
include("included_func.php" );
?>
<?php hello("Everyone"); ?>
<?php
/* In addition to include(), you can also use:
include_once();
require();
require_once();
include_once and require_once will include a file
UNLESS it has already been included (PHP keeps
track).
Useful for files with constants &
functions because they can't be defined
more than once.
*/
?>
</body>
</html>
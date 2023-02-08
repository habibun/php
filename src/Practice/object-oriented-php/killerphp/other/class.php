<?php include("classdog.php"); ?>

<?php
class snake{
    function eat_bugs()
    {
        echo "He eats bug.";

        $dog = new dog();
        $dog->eat_snake();
    }
}
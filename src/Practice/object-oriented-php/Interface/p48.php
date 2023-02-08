<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/15/14
 * Time: 10:13 PM
 */
interface Sort {
    function getContentsAsText();
}
class Doc implements Sort{
    public function getContentsAsText(){
        return "This is Text of the Document\n";
    }
}
$p= new Doc();
echo $p->getContentsAsText();
?>
<?php
//function.txt can also used to return values.
function add($x, $y)
{
    $total = $x+$y;
    return $total;
}
echo "1+16 = " .add(1,16);
?>


a function can return more than one value by using list() construct:
<?php
function webcoachbdTutorial(){
    $quality[] = "Informative site";
    $quality[] = "Easy to Understand";
    $quality[] = "easy to navigate";
    return $quality;
}
list($info1,$info2,$info3) = webcoachbdTutorial();
echo "Webcoachbd is $info1,$info2,$info3";
?>
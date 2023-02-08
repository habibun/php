<?php
//print_r() basically use for debugging
//it is also use to know variables details
//letter array
$letter = range("C","K");
print_r($letter);
if(is_array($letter)){
    echo "this is an array and its 3rd value is $letter[2]";
}else{
    echo "this is not an array";
}
?>
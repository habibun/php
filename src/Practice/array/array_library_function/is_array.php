<?php
//is_array() function.txt is check a variables is that variables is array or not

//letter array
$letter = range("C","K");
if(is_array($letter)){
    echo "this is an array and its 3rd value is $letter[2]";
}else{
    echo "this is not an array";
}
?>


<?php
$yes=array('this','is','an array');
echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br \>";
$no='this is a string';
echo is_array($no) ? 'Array' : 'not an Array';
?>
<?php
define("MESSAGE", "Welcome to my World");
echo MESSAGE;
?>
//constant is not changeable
<?php
define("M", 20);
echo M;
?>

<?php //use of constant within condition; ?>
<?php
define ("MY_CONSTANT", 36);
if (defined("MY_CONSTANT"))
	{
		echo "Constant is defined";
	}
else
	{
		echo "Constant is not defined";
	}
?>


<?php //string, Integer, Boolean and  Float type data declare ?>
<?php
// string
define(  'AUTHOR', 'J de Silva' );
// Integer
define( 'COLUMNS', 3 );
// Boolean
define( 'SHOW_MENU', FALSE );
// Float
define( 'DISCOUNT_50', 0.5 );

echo AUTHOR;
echo COLUMNS;
echo SHOW_MENU;
echo DISCOUNT_50;
?>


<?php //another example?>
<?php
$Page_number = 560;
define("PAGE_NUMBER",560);
echo PAGE_NUMBER;
$PAGE_NUMBER += 1 ;
echo PAGE_NUMBER;
//show error in number 10.because constant value is not changeble
?>
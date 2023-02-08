<?php
//options and flags are used to add additional filtering options to the specified filters.
//difference filters have different option and flag
//in this example below we validate_input an integer using the filter_var() and the min_range and max_range options:
$var=300;
$int_options = array("options"=>array
					(
					"min_range"=>0,
					"max_range"=>256
					)
					);	
	if(!filter_var($var, FILTER_VALIDATE_INT,$int_options))
		{
			echo("Integer is not valid");
		}
		else
		{
				echo("Integer is valid");
		}

//Note:like the code above options must be put in an associative array with the name "options".if a flag is used it does not need to be ain an array.
?>
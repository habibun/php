<?php
if(!filter_has_var(INPUT_GET, "email"))
	{
	echo("Input type does not exist");
	}
	else
		{
		if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
			{
			echo "E-Mail is not valid";
			}
			else
				{
				echo "E-Mail is valid";
				}
				}
?>

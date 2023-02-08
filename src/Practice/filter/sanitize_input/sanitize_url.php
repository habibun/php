<?php
if(!filter_has_var(INPUT_POST, "url"))
	{
		echo("Input type does not exist");
		}
		else
			{
			$url = filter_input(INPUT_POST,
					"url", FILTER_SANITIZE_URL);
			}
			echo $url;
	?>
<?php
if ($_FILES["file"]["error"] > 0)   //the error code resulting from the file upload
{
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br />";   //the name of the uploaded file
echo "Type: " . $_FILES["file"]["type"] . "<br />"; //the type of the uploaded file
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; //the size in bytes of the uploaded file
echo "Stored in: " . $_FILES["file"]["tmp_name"];   //the name of the temporary copy of the file stored on the server
}
?>
<html>
<body>
<!--multipart/form-data is used when a form requires binary data like the contents of a file to be uploaded.-->
<form action="saving_the_uploaded_file.php" method="post"
      enctype="multipart/form-data">
    <label for="file">Filename:</label>
<!--the type="file" attribute of the <input> tag specified that the input should be processed as a file -->
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="Submit" value="Submit" />
</form>
</body>
</html>
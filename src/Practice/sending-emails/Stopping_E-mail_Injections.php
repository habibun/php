<html> <body>
<?php
function spamcheck($field)
{
//eregi() performs a case insensitive regular expression match
    if(eregi("to:",$field) || eregi("cc:",$field))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
//if "email" is filled out, send email
if (isset($_REQUEST['email']))
{
//check if the email address is invalid
$mailcheck = spamcheck($_REQUEST['email']);
if ($mailcheck==TRUE)
{
    echo "Invalid input";
}
else
{
//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("someone@example.com", "Subject: $subject",
        $message, "From: $email" );
    echo "Thank you for using our mail form";
}
}
else
//if "email" is not filled out, display the form
{
    echo "<form method='post' action='Stopping_E-mail_Injections.php'>
    Email: <input name='email' type='strings' /><br />
    Subject: <input name='subject' type='strings' /><br />
     Message:<br />   <textarea name='message' rows='15' cols='40'>
     </textarea><br />
     <input type='submit' />
      </form>";
}
?>
</body>
</html>
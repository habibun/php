<?php
function displayEntry()
{
    $entryDisp = NULL;

    // Get the information from the database
    $sql = "SELECT title, entry FROM entries WHERE page='blog'";
    $r = mysql_query($sql) or die(mysql_error());
    while($entry = mysql_fetch_assoc($r)) {
        $title = $entry['title'];
        $text = $entry['entry'];

        // Create the text preview
        $textArray = explode(' ',$text);
        $preview = NULL;
        for($i=0; $i<24; $i++) {
            $preview .= $textArray[$i] . ' ';
        }
        $preview .= $textArray[24] . '...';

        // Format the entries
        $entryDisp .= <<<ENTRY_DISPLAY
 
<h2> $title </h2>
<p>
$preview
</p>
ENTRY_DISPLAY;
    }

    return $entryDisp;
}
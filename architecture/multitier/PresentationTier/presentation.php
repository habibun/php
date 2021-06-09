<?php
    $entries = getDataFromDB(); // Load entries into an array
    foreach($entries as $entry) {
        /*
         * Place the title and shortened entry text into two appropriately
         * named variables to further simplify formatting. Also note that
         * we're using the optional $length parameter to create a 30-word
         * text preview with createTextPreview()
         */
        $title = $entry['title'];
        $preview = createTextPreview($entry['entry'], 30);
        ?>

        <h2> <?php echo $title; ?> </h2>
        <p> <?php echo $preview; ?> </p>

        <?php
    } // End foreach loop
?>
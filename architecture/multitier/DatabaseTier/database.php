<?php

function getDataFromDB($page)
{
    /*
     * Connect to a MySQL server
     */
    $mysqli = new mysqli('localhost', 'user', 'password', 'world');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit;
    }

    /*
     * Create a prepared statement for pulling all entries from a page
     */
    if ($stmt = $mysqli->prepare('SELECT title, entry FROM entries WHERE page=?')) {
        /*
         * Create a multi-dimensional array to store
         * the information from each entry
         */
        $entries = array();

        /*
         * Bind the passed parameter to the query, retrieve the data, and place
         * it into the array $entries for later use
         */
        $stmt->bind_param("s", $page);
        $stmt->execute();
        $stmt->bind_result($title, $entry);
        while($stmt->fetch()) {
            $entries[] = array(
                'title' => $title,
                'entry' => $entry
            );
        }

        /*
         * Destroy the result set and free the memory used for it
         */
        $stmt->close();
    }

    /*
     * Close the connection
     */
    $mysqli->close();

    /*
     * Return the array
     */
    return $entries;
}
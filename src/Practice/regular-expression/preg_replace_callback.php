<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/5/14
 * Time: 12:05 PM
 */
function acronym($matches) {
    $acronyms = array(
        'PHP' => 'PHP Hypertext Processor',
        'WWW' => 'World Wide Web');
    return $acronyms[$matches[1]];
}
$text = "now a days<acronym>PHP</acronym> is the
popular language for <acronym>WWW</acronym>.";
$newtext = preg_replace_callback("/<acronym>(.*)<\/acronym>/", 'acronym',
    $text);
print_r($newtext);
?>
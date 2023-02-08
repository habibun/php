<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 4:01 PM
 * File Name: filter_multiple_inputs.php
 */
$filters = array(
    'name' => array(
        "filter" =>FILTER_SANITIZE_STRING
    ),
    'age' => array(
        'filter' =>FILTER_VALIDATE_INT,
        'options' => array(
            'min_range' =>1,
            'max_range' =>120
        )
    ),
    'email' =>FILTER_VALIDATE_EMAIL,
);
$result = filter_input_array(INPUT_GET, $filters);
if (!$result["age"]) {
    echo "Age must be a number between 1 and 120.<br />";
}
elseif (!$result["email"]) {
    echo "Email is not valid.<br />";
}
else {
    echo "User input is valid";
}

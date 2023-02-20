SELECT persons.`last_name`,first_name,orders.`order_no`
FROM persons
LEFT JOIN orders
ON persons.`p_id` = orders.`p_id`
ORDER BY persons.`last_name`;
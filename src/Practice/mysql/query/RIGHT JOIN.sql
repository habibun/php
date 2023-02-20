SELECT persons.`last_name`,first_name,orders.`order_no`
FROM persons
RIGHT JOIN orders
ON persons.`p_id` = orders.`p_id`
ORDER BY persons.`last_name`;
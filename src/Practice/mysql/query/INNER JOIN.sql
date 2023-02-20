SELECT persons.`last_name`,persons.`first_name`,orders.`order_no` 
FROM persons 
INNER JOIN orders
ON persons.`p_id` = orders.`p_id`
ORDER BY persons.`last_name`; 
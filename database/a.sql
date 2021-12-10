 SELECT * FROM customer_order WHERE record_id = 5 AND `status` = 'active';
 
 SELECT * FROM customer_order INNER JOIN users ON customer_order.`customer_id` = users.`user_id` WHERE customer_order.`status` = 'active' AND record_id = 5 
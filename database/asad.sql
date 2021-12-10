SELECT customer_order.`order_name`, customer_order.`weight`, customer_order.`height`, customer_order.`width`, customer_order.`status`, customer_order.`pakage_value`  FROM customer_order INNER JOIN `users` ON customer_order.`customer_id` = users.`user_id` WHERE customer_order.`customer_id` = 2 AND customer_order.status = 'active';

UPDATE customer_order SET  STATUS='inactive' WHERE record_id='10'


DELETE
FROM `urban`.`country_rates`
WHERE `status` = 'inactive';

SELECT * 
		FROM customer_order
		RIGHT JOIN users
		ON customer_order.`customer_id` = users.`user_id`
		
		SELECT * FROM customer_order WHERE `status`= 'active' AND  `record_id` = '2'
		
SELECT customer_order.`record_id`, customer_order.`order_name`, customer_order.`weight`, customer_order.`height`, customer_order.`width`, customer_order.`status`, customer_order.`pakage_value`  FROM customer_order INNER JOIN `users` ON customer_order.`customer_id` = users.`user_id` WHERE customer_order.`customer_id` =  AND customer_order.status = 'active'
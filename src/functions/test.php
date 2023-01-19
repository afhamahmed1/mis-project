SELECT 
    products.name AS product_name, 
    SUM(order_items.quantity) AS units_sold,
    (SUM(order_items.quantity) / 
        (SELECT SUM(quantity) FROM order_items 
        JOIN sales_order ON sales_order.id = order_items.sales_order_id
        WHERE WEEK(sales_order.order_date) = WEEK(CURDATE()) 
        AND YEAR(sales_order.order_date) = YEAR(CURDATE())) * 100) AS percentage,
    employees.name AS employee
FROM order_items
JOIN products ON order_items.product_id = products.id
JOIN sales_order ON sales_order.id = order_items.sales_order_id
JOIN employees ON sales_order.employee_id = employees.id
WHERE WEEK(sales_order.order_date) = WEEK(CURDATE()) AND YEAR(sales_order.order_date) = YEAR(CURDATE())
GROUP BY order_items.product_id, employees.id;

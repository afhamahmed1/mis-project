<?php
require_once("config.php");

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}

function get_inventory(){
    global $conn;
    $view_query = "select products.id product_id, products.name product_name, products.cost product_cost, products.price product_price, products.quantity product_quantity from products";
    return mysqli_query($conn, $view_query);
}

function revenue_on_month_bases($year){
    global $conn;
    $view_query = "
    SELECT 
        DATE_FORMAT(order_date, '%Y-%m') AS month,
        COUNT(*) AS number_of_orders
    FROM sales_order
    WHERE YEAR(order_date) = '$year'
    GROUP BY DATE_FORMAT(order_date, '%Y-%m')
    ORDER BY order_date ASC;
    ";
    return mysqli_query($conn, $view_query);
}


function order_statistics(){
    global $conn;
    $view_query = "
    SELECT 
    products.name AS product_name, 
    SUM(order_items.quantity) AS units_sold,
    (SUM(order_items.quantity) / 
        (SELECT SUM(quantity) FROM order_items 
        JOIN sales_order ON sales_order.id = order_items.sales_order_id
        WHERE WEEK(sales_order.order_date,1) = WEEKOFYEAR(CURDATE()) 
        AND YEAR(sales_order.order_date) = YEAR(CURDATE())) * 100) AS percentage,
    employees.name AS employee
    FROM order_items
    JOIN products ON order_items.product_id = products.id
    JOIN sales_order ON sales_order.id = order_items.sales_order_id
    JOIN employees ON sales_order.employee_id = employees.id
    WHERE WEEK(sales_order.order_date,1) = WEEKOFYEAR(CURDATE()) AND YEAR(sales_order.order_date) = YEAR(CURDATE())
    GROUP BY order_items.product_id;

    ";
    return mysqli_query($conn, $view_query);
}

function order_statistics_of_employee($id){
    global $conn;
    $view_query = "
    SELECT 
    products.name AS product_name, 
    SUM(order_items.quantity) AS units_sold,
    (SUM(order_items.quantity) / 
        (SELECT SUM(quantity) FROM order_items 
        JOIN sales_order ON sales_order.id = order_items.sales_order_id
        WHERE WEEK(sales_order.order_date,1) = WEEKOFYEAR(CURDATE()) and employees.id = $id
        AND WEEK(sales_order.order_date) = WEEK(CURDATE())) * 100) AS percentage,
    employees.name AS employee
    FROM order_items
    JOIN products ON order_items.product_id = products.id
    JOIN sales_order ON sales_order.id = order_items.sales_order_id
    JOIN employees ON sales_order.employee_id = employees.id
    WHERE WEEK(sales_order.order_date,1) = WEEKOFYEAR(CURDATE()) AND WEEK(sales_order.order_date) = WEEK(CURDATE())  and employees.id = $id
    GROUP BY order_items.product_id;

    ";
    return mysqli_query($conn, $view_query);
}

function manager_report($by = 'MONTH'){
    global $conn;
    $format = ($by == "MONTH") ? "MONTH" : "YEAR";
    $view_query = "
    SELECT 
        products.id AS product_id,
        products.name AS product_name,
        SUM(order_items.quantity) AS units_sold,
        products.price as unit_price,
        products.price*SUM(order_items.quantity) as extended_price
    FROM order_items
    JOIN products ON order_items.product_id = products.id
    JOIN sales_order ON sales_order.id = order_items.sales_order_id
    JOIN employees on employees.id = sales_order.employee_id
    WHERE $format(sales_order.order_date) = $format(CURDATE())
    GROUP BY order_items.product_id;
    ";
    return mysqli_query($conn, $view_query);
}

function employee_report($id, $by = "MONTH"){
    global $conn;
    $format = ($by == "MONTH") ? "MONTH" : "YEAR";
    $view_query = "
    SELECT 
        products.id AS product_id,
        products.name AS product_name,
        SUM(order_items.quantity) AS units_sold,
        products.price as unit_price,
        products.price*SUM(order_items.quantity) as extended_price,
        employees.name AS employee_name
    FROM order_items
    JOIN products ON order_items.product_id = products.id
    JOIN sales_order ON sales_order.id = order_items.sales_order_id
    JOIN employees on employees.id = sales_order.employee_id
    WHERE $format(sales_order.order_date) = $format(CURDATE()) and employees.id = $id
    GROUP BY order_items.product_id, sales_order.employee_id;
    ";
    return mysqli_query($conn, $view_query);
}


function getAll($tablename)
{
    global $conn;
    $view_query = "select * from $tablename";
    return mysqli_query($conn, $view_query);
}

function getBySection($tablename, $section_name)
{
    global $conn;
    $view_query = "select * from $tablename where section = '$section_name'";
    return mysqli_query($conn, $view_query);
}

function getByLimit($tablename, $limit)
{
    global $conn;
    $view_query = "select * from $tablename  LIMIT $limit";
    return mysqli_query($conn, $view_query);
}

function getByColumn($tablename, $column_name, $column)
{
    global $conn;
    $view_query = "select * from $tablename where $column_name = '$column'";
    return mysqli_query($conn, $view_query);
}

function getById($tablename, $id)
{
    global $conn;
    $view_query = "select * from $tablename where id = $id";
    return (mysqli_query($conn, $view_query));
}

function section_name($tablename1, $tablename2, $item_id, $id)
{
    global $conn;
    $view_query = "select c.name from $tablename1 as s inner join $tablename2 as c on s.$item_id = c.id where s.$item_id = $id";
    return mysqli_query($conn, $view_query);
}

function recentposts()
{
    global $conn;
    $recent_post = "SELECT * FROM blogs ORDER BY created_at desc limit 3";
    return mysqli_query($conn, $recent_post);
}

function getAllUnique($tablename, $column_name)
{
    global $conn;
    $all_unique = "SELECT DISTINCT($column_name) from $tablename";
    return mysqli_query($conn, $all_unique);
}

function addImage($image)
{
    $filename = "";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    return $filename;
}
function linkImage($image, $filename, $path = "../uploads/")
{
    move_uploaded_file($image, $path . $filename);
}

function editImage($new_image, $old_image)
{
    $filename = "";
    if ($new_image == "") {
        $filename = $old_image;
    } else {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;
    }
    return $filename;
}

function unlinkImage($new_image, $old_image, $filename, $path = "../uploads/")
{
    if ($new_image != "") {
        move_uploaded_file($new_image, $path . $filename);
        if (file_exists($path . $old_image)) {
            unlink($path . $old_image);
        }
    }
}
function maxColumn($tablename, $column_name = "id")
{
    global $conn;
    $query = "select max($column_name) from $tablename";
    return mysqli_query($conn, $query);
}
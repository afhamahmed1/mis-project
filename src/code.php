<?php
session_start();
include_once('middleware/adminMiddleware.php');


class Database
{

    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "mis_assignment");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error($this->conn));
        }
    }
    public function insert($tablename, $data)
    {
        $insert_query = "INSERT INTO " . $tablename . " (";
        $insert_query .= implode(",", array_keys($data)) . ') VALUES (';
        $insert_query .= "'"  . implode("','", array_values($data)) . "')";
        $insert_query_run = mysqli_query($this->conn, $insert_query);
        if ($insert_query_run) {
            return true;
        } else {
            return false;
        }
    }
    public function update($tablename, $data, $id)
    {
        $update_query = "UPDATE $tablename set ";
        foreach ($data as $i => $item) {
            $update_query .= $i . " = " . "'$item'" . ", ";
        }
        $update_query = substr($update_query, 0, strlen($update_query) - 2);
        $update_query .= " where id = '$id'";

        $update_query_run = mysqli_query($this->conn, $update_query);
        if ($update_query_run) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($tablename, $id)
    {
        $delete_query = "DELETE from $tablename where id = '$id'";
        $delete_query_run = mysqli_query($this->conn, $delete_query);
        if ($delete_query_run) {
            return true;
        } else {
            return false;
        }
    }
}

$database = new Database();


if (isset($_POST['add_btn'])) {
    
    $data = array(
        "name" => $_POST['name'],
        "cost" => $_POST['cost'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity'],
        "description" => $_POST['description'],

    );
    $database->insert('products', $data);
    if ($database) {
        redirect("index.php", "Item Added Successfully.");
    } else {
        redirect("index.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_btn'])) {
    $id = $_POST['product_id'];

    $data = array(
        "name" => $_POST['name'],
        "cost" => $_POST['cost'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity'],
        "description" => $_POST['description'],

    );
    $database->update("products", $data, $id);
    if ($database) {
        
        redirect("index.php", "Product Updated Successfully.");
    } else {
        redirect("index.php", "Something Went Wrong");
    }
} else if (isset($_POST['delete_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['product_id']);
    
    $database->delete("products", $id);
    if ($database) {

        redirect("index.php", "Product Deleted Successfully.");
    } else {
        redirect("index.php", "Something Went Wrong.");
    }
}

else if (isset($_POST['edit_account_btn'])) {
    $id = $_POST['id'];

    $data = array(
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "phone" => $_POST['phone'],
        "city" => $_POST['city'],
        "address" => $_POST['address'],

    );
    $database->update("employees", $data, $id);
    if ($database) {
        
        redirect("index.php", "Profile Updated Successfully.");
    } else {
        redirect("index.php", "Something Went Wrong");
    }
}
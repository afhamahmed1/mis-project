<?php
session_start();
include("myfunctions.php");
include("config.php");

if (isset($_POST["login_btn"])) {
    $username = mysqli_real_escape_string($conn, $_POST['email-username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "select * from employees where (email = '$username' or name = '$username') and password = '$password'";
    $query_run = mysqli_query($conn, $query);
    // echo $query_run;
    if (mysqli_num_rows($query_run) > 0) {
        
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_assoc($query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['status'];
        $_SESSION['auth_user'] = [
            'userid' => $userid,
            'name' => $username,
            'email' => $email
        ];
        $_SESSION['role_as'] = $role_as;

        if ($role_as == 1 || $role_as == 0 ) {

            redirect("../index.php", "Welcome to dashboard");
        }
    } else {

        $_SESSION['message'] = 'Please enter the correct email or Password';
        header('Location: ../login.php');
        
    }
} else {
    redirect("../login.php", "Something went wrong");
    
}

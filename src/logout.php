<?php
session_start();

unset($_SESSION['auth']);
include_once('middleware/employeeMiddleware.php');



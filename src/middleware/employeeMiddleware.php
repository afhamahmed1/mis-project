<?php
include_once('functions/myfunctions.php');

if (isset($_SESSION['auth'])) {

    if ($_SESSION['role_as'] != 0 || $_SESSION['role_as'] != 1) {
        
    }
} else {
    redirect('login.php', 'Login to continue');
}

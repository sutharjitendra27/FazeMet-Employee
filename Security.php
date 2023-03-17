<?php

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['Password'];
    
    if ($email=="admin123@gmail.com" && $password=="admin@123") {
        header('Location: Dashboard/dashboard.php');
    }
    
}

?>
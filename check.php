<?php
    $fullname = filter_var(trim($_POST['fullname']), FILTER_SANITIZE_STRING);
    $reg_email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $reg_password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $reg_password = md5($reg_password."jddjsfbvsfbfs");

    $mysql = new mysqli('localhost', 'root', '', 'users-books');
    $mysql->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES('$fullname', '$reg_email', '$reg_password')");
    $mysql->close();

    header('Location: /libbook/admin.php');
?>
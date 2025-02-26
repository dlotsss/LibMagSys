<?php
    $book_name = filter_var(trim($_POST['book']), FILTER_SANITIZE_STRING);
    $customer_email = filter_var(trim($_POST['customer_email']), FILTER_SANITIZE_STRING);
    $customer_name = filter_var(trim($_POST['customer_name']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'users-books');
    $mysql->query("INSERT INTO `orders` (`customer_name`, `email`, `book_name`) VALUES('$customer_name', '$customer_email', '$book_name')");
    $mysql->close();

    header('Location: /libbook/index.php');
?>
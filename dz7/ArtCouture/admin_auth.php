<?php
require 'db_connection.php'; 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_requests.php"); 
    } else {
        echo "Неверный логин или пароль";
    }

    $stmt->close();
    $conn->close();
}
?>

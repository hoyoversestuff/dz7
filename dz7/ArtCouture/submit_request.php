<?php
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $contact = htmlspecialchars($_POST['contact']);
    $product = htmlspecialchars($_POST['product']);

    $sql = "INSERT INTO requests (username, contact, product) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $contact, $product);

    if ($stmt->execute()) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
require 'db_connection.php'; 
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php"); 
    exit();
}

$sql = "SELECT * FROM requests ORDER BY created_at DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр заявок</title>
</head>
<body>
    <h3>Поступившие заявки</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Контакты</th>
            <th>Изделие</th>
            <th>Дата отправки</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="logout.php">Выйти</a>
</body>
</html>

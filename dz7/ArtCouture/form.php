<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Art Couture</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="header-buttons">
        <a class="logo" href="index.php">
            Art Couture
        </a>
            <a href="portfolio.php" class="nav-button">Портфолио</a>
            <a href="technology.php" class="nav-button">О технологиях пошива</a>
            <a href="price.php" class="nav-button">О стоимости работ</a>
            <a href="contacts.php" class="nav-button">Контактная информация</a>
            <a href="form.php" class="nav-button">Оставить заявку</a>
        </div>
    </div>
    <h3>Оставить заявку</h3>
    <form action="submit_request.php" method="POST" class="contact-form">
        <label for="username">Ваше имя:</label>
        <input type="text" id="username" name="username" required>

        <label for="contact">Ваши контакты:</label>
        <input type="text" id="contact" name="contact" required>

        <label for="product">Желаемое изделие:</label>
        <textarea id="product" name="product" rows="5" required></textarea>

        <button type="submit" class="submit-button">Отправить заявку</button>
    </form>
    </div>
    <div id="footer">
        <div class="all-symbols">
            <a href="https://vk.com/feed"><img src="https://cdn-icons-png.flaticon.com/512/25/25684.png" class="symbol"
                    alt="VK icon"></a>
            <a href="https://ok.ru/"><img src="https://cdn-icons-png.flaticon.com/512/48/48971.png" class="symbol"
                    alt="OK icon"></a>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
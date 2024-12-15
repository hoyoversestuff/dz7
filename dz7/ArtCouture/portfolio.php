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

    <div class="portfolio-container">
        <h2>Наши работы</h2>
        <div class="slider">
            <button class="prev">&#10094;</button>
            <div class="slides">
                <div class="slide">
                    <img src="img/dress3.jpg" alt="Платье">
                    <div class="description">
                        <h3>Элегантное вечернее платье</h3>
                        <p>Цена: 15 000 руб.</p>
                        <p>Идеально подчеркивает фигуру, создано из высококачественного шелка.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/dress1.jpg" alt="Костюм">
                    <div class="description">
                        <h3>Деловой костюм</h3>
                        <p>Цена: 12 000 руб.</p>
                        <p>Классический крой, идеально подходит для офиса и официальных мероприятий.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/dress2.png" alt="Платье">
                    <div class="description">
                        <h3>Летнее платье</h3>
                        <p>Цена: 10 000 руб.</p>
                        <p>Легкое и удобное, идеально для теплых летних дней.</p>
                    </div>
                </div>
            </div>
            <button class="next">&#10095;</button>
        </div>
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
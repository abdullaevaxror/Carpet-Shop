<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Dizayni</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        header {
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        header .logo img {
            height: 50px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .catalog-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .catalog-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 290px;
            height: 400px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .catalog-item img {
            width: 176px;
            height: 236px;
            object-fit: cover;
            border-radius: 10px;
        }

        .catalog-item h3 {
            margin: 15px 0;
            font-size: 18px;
            text-align: center;
        }

        .catalog-item p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .catalog-item .price {
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .catalog-item .button {
            margin-top: auto;
            padding: 10px 20px;
            background-color: #3d9e81;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
        }

        .filter-section {
            width: 250px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }

        .filter-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }

        .filter-section label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .filter-section input,
        .filter-section select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .main-content {
            display: flex;
        }

        footer {
            margin-top: 40px;
            padding: 20px;
            text-align: center;
            background-color: #333;
            color: #fff;
        }
        .add-to-cart {
            margin-top: auto;
            padding: 10px 20px;
            background-color: #3d9e81;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="/images/LogoCatalog.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="catalog.html">Ковры</a></li>
            <li><a href="#contact">Контакты</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Ковры Каталог</h1>
    <div class="main-content">
        <aside class="filter-section">
            <h3>Фильтры</h3>
            <label for="price">Цена:</label>
            <input type="text" id="price" placeholder="От">
            <input type="text" id="price" placeholder="До">

            <label for="country">Страна:</label>
            <select id="country">
                <option value="">Все</option>
                <option value="kz">Казахстан</option>
                <option value="tr">Турция</option>
            </select>

            <label for="material">Материал:</label>
            <select id="material">
                <option value="">Все</option>
                <option value="wool">Шерсть</option>
                <option value="silk">Шелк</option>
            </select>

            <label for="color">Цвет:</label>
            <select id="color">
                <option value="">Все</option>
                <option value="red">Красный</option>
                <option value="blue">Синий</option>
                <option value="green">Зеленый</option>
            </select>

            <button style="padding: 10px 20px; background-color: #3d9e81; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Применить</button>
        </aside>

        <div class="catalog-container">
            <div class="catalog-item">
                <img src="/images/suggested.png" alt="Ковер">
                <h3>Aster 0893A LVIZON</h3>
                <p>Размер: 60x100</p>
                <p class="price">160,000 Т</p>
                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="product_id" value="1"> <!-- Mahsulot ID -->
                    <input type="hidden" name="product_name" value="Mahsulot nomi">
                    <input type="hidden" name="product_price" value="100000"> <!-- Narxi -->
                    <button type="submit">Savatga qo'shish</button>
                </form>
            </div>
            <div class="catalog-item">
                <img src="/images/suggested.png" alt="Ковер">
                <h3>Aster 0893A LVIZON</h3>
                <p>Размер: 60x100</p>
                <p class="price">160,000 Т</p>
                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="product_id" value="2"> <!-- Mahsulot ID -->
                    <input type="hidden" name="product_name" value="Mahsulot nomi">
                    <input type="hidden" name="product_price" value="999999"> <!-- Narxi -->
                    <button type="submit">Savatga qo'shish</button>
                </form>
            </div>
            <!-- More items -->
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2025 Bayan Sulu. Все права защищены.</p>
</footer>
</body>
</html>

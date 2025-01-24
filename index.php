<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
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
            height: 40px;
        }

        header .search {
            flex: 1;
            margin: 0 20px;
        }

        header .search input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .banner {
            background-color: #3d9e81;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 20px;
        }

        .banner .text {
            max-width: 50%;
        }

        .banner h1 {
            margin-bottom: 20px;
            font-size: 36px;
        }

        .banner button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .banner img {
            max-width: 40%;
            border-radius: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 290px;
            height: 400px;
            margin: auto;
            text-decoration: none;
        }

        .card img {
            width: 176px;
            height: 236px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .card p {
            font-size: 14px;
            color: #777;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer a {
            color: #3d9e81;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="/images/Logo.png" alt="Logo">
    </div>
    <div class="search">
        <input type="text" placeholder="Поиск по товарам">
    </div>
    <nav>
        <ul>
            <li><a href="/catalog.php">Ковры</a></li>
            <li><a href="#">Коврики</a></li>
            <li><a href="#">Для ванной</a></li>
            <li><a href="#">Дорожки</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
</header>

<div class="banner">
    <div class="text">
        <h1>Новая коллекция ковров Venetta</h1>
        <button>Смотреть все</button>
    </div>
    <img src="/images/Group%2039.png" alt="Banner Image">
</div>

<section class="cards">
    <a href="product.php" class="card">
        <img src="/images/suggested.png" alt="Product">
        <h3>Ковер Aster</h3>
        <p>160,000 Т в рассрочку</p>
    </a>
    <a href="product.php" class="card">
        <img src="/images/suggested.png" alt="Product">
        <h3>Ковер Venetta</h3>
        <p>100,000 Т в рассрочку</p>
    </a>
    <!-- Add more cards as needed -->
</section>
<footer>
    <p>&copy; 2025 Bayan Sulu. Все права защищены. <a href="#">Политика конфиденциальности</a></p>
</footer>
</body>
</html>

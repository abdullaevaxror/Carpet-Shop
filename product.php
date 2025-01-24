<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsulot Kartochkasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar uslubi */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .navbar .menu {
            display: flex;
            gap: 15px;
        }

        .navbar .menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        .navbar .menu a:hover {
            color: #ff6f61;
        }

        .navbar .icons {
            display: flex;
            gap: 15px;
            font-size: 18px;
        }

        .navbar .icons a {
            text-decoration: none;
            color: #333;
        }

        .navbar .icons a:hover {
            color: #ff6f61;
        }

        /* Sahifa umumiy dizayni */
        .container {
            width: 90%;
            margin: 20px auto;
            display: flex;
            gap: 20px;
        }

        .images-section {
            display: flex;
            gap: 20px;
        }

        .thumbnail {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .thumbnail img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            cursor: pointer;
            border: 1px solid #ccc;
        }

        .main-image {
            width: 620px;
            height: 626px;
            object-fit: cover;
            border: 1px solid #ccc;
        }

        .details-section {
            flex: 1;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .price {
            font-size: 22px;
            color: #28a745;
            margin-bottom: 20px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .actions button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .add-to-cart {
            background-color: #ff6f61;
            color: white;
        }

        .like {
            background-color: #f0f0f0;
            color: black;
        }

        .whatsapp {
            background-color: #25d366;
            color: white;
        }

        .description {
            margin-top: 20px;
        }

        .suggested-products {
            margin-top: 40px;
        }

        .suggested-products h3 {
            margin-bottom: 20px;
        }

        .suggested-list {
            display: flex;
            gap: 10px;
        }

        .suggested-item {
            width: 180px;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .suggested-item img {
            width: 100%;
            height: auto;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            padding: 20px;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="navbar">
    <a class="logo" href="/">BAYAN SÜLU</a>
    <div class="menu">
        <a href="/product.php">Ковры</a>
        <a href="#">Коврики</a>
        <a href="#">Для ванной</a>
        <a href="#">Дорожки</a>
        <a href="#">Контакты</a>
    </div>
    <div class="icons">
        <a href="#">🔍</a>
        <a href="#">👤</a>
        <a href="#">❤</a>
        <a href="/korzina.php">🛒</a>
    </div>
</div>

<!-- Sahifa kontenti -->
<div class="container">
    <!-- Images Section -->
    <div class="images-section">
        <div class="thumbnail">
            <img src="images/thumbnail1.png" alt="Thumbnail 1">
            <img src="images/thumbnail2.png" alt="Thumbnail 2">
            <img src="images/thumbnail3.png" alt="Thumbnail 3">
        </div>
        <img src="images/main-image.png" alt="Main Image" class="main-image">
    </div>

    <!-- Details Section -->
    <div class="details-section">
        <h1 class="product-title">Elexus Semerkant 1763 Coken Orta Beige</h1>
        <p class="price">160.000₸</p>

        <div class="actions">
            <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="1"> <!-- Mahsulot ID -->
                <input type="hidden" name="product_name" value="Mahsulot nomi">
                <input type="hidden" name="product_price" value="100000"> <!-- Narxi -->
                <button type="submit" class="add-to-cart">Savatga qo'shish</button>
            </form>
            <button class="like">❤</button>
            <button class="whatsapp">WhatsApp</button>
        </div>

        <div class="description">
            <h3>Mahsulot haqida</h3>
            <p>Material: Bambuk</p>
            <p>O'lcham: 160x230 sm</p>
            <p>Davlat: Turkiya</p>
        </div>
    </div>
</div>

<!-- Suggested Products -->
<div class="suggested-products">
    <h3>Sizga yoqishi mumkin</h3>
    <div class="suggested-list">
        <div class="suggested-item">
            <img src="images/suggested.png" alt="Suggested Product 1">
            <p>Aster Q893A LVIZON LVIZON</p>
        </div>
        <div class="suggested-item">
            <img src="images/suggested.png" alt="Suggested Product 2">
            <p>Aster Q893A LVIZON LVIZON</p>
        </div>
        <div class="suggested-item">
            <img src="images/suggested.png" alt="Suggested Product 3">
            <p>Aster Q893A LVIZON LVIZON</p>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>© 2025 BAYAN SÜLU. Barcha huquqlar himoyalangan.</p>
</div>
</body>
</html>

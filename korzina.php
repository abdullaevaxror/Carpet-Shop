<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korzina</title>
    <style>
        /* Umumiy stil */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Bo'sh savat uchun stil */
        .empty-cart {
            text-align: center;
            padding: 100px 20px;
            display: none;
        }

        .empty-cart h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .empty-cart p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        .empty-cart a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        /* To'liq savat uchun stil */
        .cart-container {
            margin: 40px auto;
            max-width: 1200px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .cart-header h2 {
            font-size: 24px;
            font-weight: bold;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 20px;
        }

        .cart-item .item-info {
            flex: 1;
        }

        .cart-item .item-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .cart-item .item-info .price {
            color: #e74c3c;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .cart-item .quantity {
            display: flex;
            align-items: center;
        }

        .cart-item .quantity button {
            background-color: #ddd;
            border: none;
            padding: 5px 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        .cart-item .quantity input {
            width: 50px;
            text-align: center;
            margin: 0 5px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .remove-item {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .like-item {
            background-color: transparent;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #999;
        }

        .like-item.liked {
            color: #e74c3c;
        }

        .cart-footer {
            text-align: right;
            margin-top: 20px;
        }

        .cart-footer .total-price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cart-footer button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- Savat bo'sh holati -->
<div class="empty-cart">
    <h1>Корзина пуста</h1>
    <p>Воспользуйтесь поиском, чтобы найти всё что нужно.</p>
    <a href="catalog.php">Перейти к каталогу</a>
</div>

<!-- To'liq savat ko'rinishi -->
<div class="cart-container">
    <div class="cart-header">
        <h2>Корзина</h2>
    </div>
    <div class="cart-item">
        <img src="images/product1.jpg" alt="Mahsulot nomi">
        <div class="item-info">
            <h3>Mahsulot nomi</h3>
            <p class="price" data-price="100000">100,000 T</p>
        </div>
        <div class="quantity">
            <button class="decrease">−</button>
            <input type="number" value="1" min="1">
            <button class="increase">+</button>
        </div>
        <button class="like-item">♡</button>
        <button class="remove-item">Удалить</button>
    </div>
    <div class="cart-footer">
        <p class="total-price">0 T</p>
        <button>Перейти к оформлению</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cartItems = document.querySelectorAll(".cart-item");
        const emptyCartContainer = document.querySelector(".empty-cart");
        const cartContainer = document.querySelector(".cart-container");

        // Savat bo'sh yoki to'la bo'lishini tekshiradi
        function checkCart() {
            if (cartItems.length === 0) {
                cartContainer.style.display = "none";
                emptyCartContainer.style.display = "block";
            } else {
                cartContainer.style.display = "block";
                emptyCartContainer.style.display = "none";
            }
        }

        checkCart();

        // Miqdorni boshqarish
        document.querySelectorAll(".quantity").forEach((quantityDiv) => {
            const decreaseBtn = quantityDiv.querySelector(".decrease");
            const increaseBtn = quantityDiv.querySelector(".increase");
            const quantityInput = quantityDiv.querySelector("input");

            decreaseBtn.addEventListener("click", function () {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    updateTotalPrice();
                }
            });

            increaseBtn.addEventListener("click", function () {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
                updateTotalPrice();
            });
        });

        // Like tugmasi
        document.querySelectorAll(".like-item").forEach((likeBtn) => {
            likeBtn.addEventListener("click", function () {
                this.classList.toggle("liked");
            });
        });

        // Mahsulotlarni o'chirish
        document.querySelectorAll(".remove-item").forEach((button) => {
            button.addEventListener("click", function () {
                this.closest(".cart-item").remove();
                checkCart();
                updateTotalPrice();
            });
        });

        // Jami narxni yangilash
        function updateTotalPrice() {
            let total = 0;
            document.querySelectorAll(".cart-item").forEach((cartItem) => {
                const priceElement = cartItem.querySelector(".price");
                const quantity = cartItem.querySelector(".quantity input").value;
                const price = parseFloat(priceElement.getAttribute("data-price"));
                total += price * quantity;
            });
            document.querySelector(".total-price").textContent = total.toLocaleString() + " T";
        }

        updateTotalPrice();
    });
</script>
</body>
</html>

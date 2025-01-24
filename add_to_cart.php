<?php
require 'db.php'; // Ma'lumotlar bazasiga ulanish

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = 1; // Hozircha qattiq yozilgan (keyinchalik login foydalanuvchi IDsi bo'lishi mumkin)
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Savatda bu mahsulot bor yoki yo'qligini tekshirish
    $stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = ? AND product_id = ?");
    $stmt->execute([$user_id, $product_id]);
    $cart_item = $stmt->fetch();

    if ($cart_item) {
        // Agar mahsulot savatda bo'lsa, miqdorini oshiramiz
        $stmt = $pdo->prepare("UPDATE cart SET quantity = quantity + 1 WHERE user_id = ? AND product_id = ?");
        $stmt->execute([$user_id, $product_id]);
    } else {
        // Agar mahsulot savatda bo'lmasa, yangi yozuv qo'shamiz
        $stmt = $pdo->prepare("INSERT INTO cart (user_id, product_id, product_name, product_price, quantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $product_id, $product_name, $product_price, 1]);
    }

    // Korzinkaga qayta yo'naltirish
    header('Location: korzina.php');
    exit();
}
?>

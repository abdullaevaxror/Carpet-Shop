<?php
global $pdo;
require 'db.php'; // Ma'lumotlar bazasiga ulanish

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = 1; // Hozircha qattiq yozilgan
    $product_id = $_POST['product_id'];

    // Mahsulotni savatdan o'chirish
    $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = ? AND product_id = ?");
    $stmt->execute([$user_id, $product_id]);

    // Korzinkaga qayta yo'naltirish
    header('Location: korzinka.php');
    exit();
}
?>

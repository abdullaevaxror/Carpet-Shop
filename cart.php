<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Agar savat hali bo'sh bo'lsa, yangi savat yaratamiz
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Mahsulotni savatga qo'shamiz
    $_SESSION['cart'][$product_id] = [
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1
    ];

    // Qayta yo'naltirish
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>

<?php
session_start();

// POST orqali kelgan ma'lumotlarni qabul qilish
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Sessiyada savat mavjudligini tekshirish
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Mahsulotni savatga qo'shish yoki miqdorini oshirish
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1,
        ];
    }

    // Korzinkaga qayta yo'naltirish
    header('Location: korzina.php');
    exit();
}
?>
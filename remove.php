<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];

    // Sessiyadan mahsulotni o'chirish
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }

    // Korzinkaga qayta yo'naltirish
    header('Location: korzina.php');
    exit();
}
?>

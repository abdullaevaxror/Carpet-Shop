<?php
$host = 'localhost'; // MySQL server
$db = 'online_store'; // Ma'lumotlar bazasi nomi
$user = 'axror'; // MySQL foydalanuvchisi
$password = 'Xc0~t05VF"`_'; // Foydalanuvchi paroli

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ma'lumotlar bazasiga ulanishda xatolik: " . $e->getMessage());
}
?>

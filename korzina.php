<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korzinka</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<h1>Savat</h1>
<?php if (!empty($_SESSION['cart'])): ?>
    <table>
        <thead>
        <tr>
            <th>Mahsulot nomi</th>
            <th>Narxi</th>
            <th>Soni</th>
            <th>Jami</th>
            <th>O'chirish</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total = 0;
        foreach ($_SESSION['cart'] as $id => $product):
            $subtotal = $product['price'] * $product['quantity'];
            $total += $subtotal;
            ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?> Т</td>
                <td><?= $product['quantity'] ?></td>
                <td><?= $subtotal ?> Т</td>
                <td>
                    <form method="POST" action="remove.php">
                        <input type="hidden" name="product_id" value="<?= $id ?>">
                        <button type="submit">O'chirish</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Jami: <?= $total ?> Т</h2>
<?php else: ?>
    <p>Savat bo'sh</p>
<?php endif; ?>
</body>
</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
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

        .actions button {
            padding: 5px 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .actions button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
<h1>Savat</h1>

<?php if (isset($_SESSION['message'])): ?>
    <p style="color: green;"><?= $_SESSION['message'] ?></p>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

<?php if (!empty($_SESSION['cart'])): ?>
    <table>
        <thead>
        <tr>
            <th>Mahsulot nomi</th>
            <th>Narxi</th>
            <th>Soni</th>
            <th>Jami</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total_price = 0;
        foreach ($_SESSION['cart'] as $id => $product):
            $subtotal = $product['price'] * $product['quantity'];
            $total_price += $subtotal;
            ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?> Т</td>
                <td><?= $product['quantity'] ?></td>
                <td><?= $subtotal ?> Т</td>
                <td class="actions">
                    <form method="POST" action="remove.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?= $id ?>">
                        <button type="submit">O'chirish</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Jami: <?= $total_price ?> Т</h2>
<?php else: ?>
    <p>Savat bo'sh</p>
<?php endif; ?>

<a href="catalog.php" style="text-decoration: none; color: #007bff;">Katalogga qaytish</a>
</body>
</html>

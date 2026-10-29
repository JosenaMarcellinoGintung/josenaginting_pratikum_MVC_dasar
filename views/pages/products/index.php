<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <h1>Daftar Produk</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['stock'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
<?php
require 'conecting.php';


// Query untuk mendapatkan data barang
$stmt = $pdo->query('SELECT * FROM barang');
$barang = $stmt->fetchAll();

if (!isset($barang)) {
    die('Failed to retrieve data from database.');
}
?>


<h2>Read Barang</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($barang)): ?>
            <?php foreach ($barang as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id']) ?></td>
                <td><?= htmlspecialchars($item['namabarang']) ?></td>
                <td><?= htmlspecialchars($item['jumlah']) ?></td>
                <td><?= htmlspecialchars($item['subtotal']) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No data available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


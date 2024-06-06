<?php
require 'conecting.php';
require 'register.css';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];
    $subtotal = $_POST['subtotal'];
    $stmt = $pdo->prepare('INSERT INTO barang (id, namabarang, jumlah, subtotals) VALUES (?, ?, ?)');
    $stmt->execute([$id, $namabarang, $jumlah, $subtotal]);
    header('Location: index.php');
    exit;
}
?>

<?php template_header('Create Contact'); ?>

<h2>Create Contact</h2>
<form method="post" action="create.php">
    <label for="id">Id</label>
    <input type="text" name="id" id="id" required>
    <label for="namabarang">Nama Barang</label>
    <input type="text" name="namabarang" id="namabarang" required>
    <label for="jumlah">Jumlah Barang</label>
    <input type="text" name="jumlahbarang" id="jumlahbarang" required>
    <label for="subtotal">Subtotal</label>
    <input type="text" name="subtotal" id="subtotal" required>
    <input type="submit" value="Create">
</form>

<?php template_footer(); ?>
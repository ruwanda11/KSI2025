<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (nama, harga) VALUES ('$nama', '$harga')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
  <input type="text" name="nama" placeholder="Nama Produk">
  <input type="number" name="harga" placeholder="Harga Produk">
  <button type="submit" name="submit">Tambah</button>
</form>

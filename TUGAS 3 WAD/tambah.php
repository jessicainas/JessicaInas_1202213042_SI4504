<?php
require 'function.php';

if (isset($_POST["SUBMIT"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('BERHASIL!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('HARAP COBA LAGI!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Barang di Toko Jessica</title>
    </head>
    <body>
        <h1>Tambah Data Barang Toko Jessica</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang">
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang">
                </li>
                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual">
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name="stokbarang" id="stokbarang">
                </li>
                <li>
                    <label for="gambarbarang">Gambar Barang</label>
                    <input type="text" name="gambarbarang" id="gambarbarang">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>

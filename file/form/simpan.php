<?php

if ($_GET) {
    //variable penampung
    $mahasiswa = $_GET['npm']
        . "-" . $_GET['nama'] . "\n";
    //simpan ke file
    $file_name = "mahasiswa.txt";
    if (file_put_contents($file_name, $mahasiswa, FILE_APPEND) > 0) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }

    echo '<br><br><a href="form.php">Kembali ke Form</a>';
    echo '<br><br><a href="baca.php">Lihat Data</a>';
}

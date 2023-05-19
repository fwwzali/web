<?php
$first = "andi";
$nama = "andi wijaya\n";
$nama .= "cokro subakir\n";
$nama .= "handi yunianto";

$file_name = "daftar_nama.txt";
file_put_contents($file_name, $nama);

$read = file_get_contents($file_name);
echo $read;

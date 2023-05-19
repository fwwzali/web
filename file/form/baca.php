<?php

echo "<h3>Data Mahasiswa</h3>";
$file_name = "mahasiswa.txt";

$read = file($file_name); //arr

echo "<table border='1'>
    <tr>
        <td>NPM</td>
        <td>NAMA</td>
    </tr>";

foreach ($read as $mhs) {
    $data_mhs = explode("-", $mhs); //arr
    echo "<tr>";
    echo "<td>$data_mhs[0]</td>";
    echo "<td>$data_mhs[1]</td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><br><a href="form.php">Kembali ke Form</a>';

<?php if (!isset($_GET['req'])): ?>
    <form method="get">
        <input type="text" name="req"> &nbsp;&nbsp;
        <input type="submit" name="submit" value="Generate Data!">
    </form>

<?php else: ?>

<?php
  //var
  $base_npm = '01500';
  $base_name = 'SUDEMO ';
  $base_alamat = 'Jl. Indah No. 0';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loop</title>
  </head>
  <body>
        <table border="1">
          <thead>
            <tr>
              <th>No.</th>
              <th>NPM</th>
              <th>Nama</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
              <?php $counter = 1; while($counter <= $_GET['req']) :?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $base_npm.$counter; ?></td>
                    <td><?php echo $base_name.$counter; ?></td>
                    <td><?php echo $base_alamat.$counter; ?></td>
                  </tr>
              <?php $counter++; endwhile; ?>
          </tbody>
        </table>
  </body>
</html>

<?php endif; ?>















<?php

    $mahasiswa = array(
        'npm' => '15001',
        'nama'=> 'sudemo',
        'alamat' => 'jl. indah no 1'
    );

    $mahasiswa_all = array(
      array(
          'npm' => '15001',
          'nama'=> 'sudemo',
          'alamat' => array(
            'jalan' => 'jl indah no 1',
            'kota' => 'surabaya',
            'provinsi' => 'Jawa Timur'
          )
      ),
      array(
          'npm' => '15002',
          'nama'=> 'sudemo',
          'alamat' => 'jl. indah no 2'
      ),
      array(
          'npm' => '15003',
          'nama'=> 'sudemo',
          'alamat' => 'jl. indah no 3'
      )
    );

 ?>

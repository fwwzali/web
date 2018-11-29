<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['k_propinsi'])) {
          //query SQL
          $k_propinsi = $_GET['k_propinsi'];
          $query = "SELECT * FROM m_kota WHERE k_propinsi = '$k_propinsi'"; 

          //eksekusi query
          $kota = mysqli_query(connection(),$query);

          while($data = mysqli_fetch_array($kota)){
            echo "<option value='".$data['k_kota']."'>".$data['content']."</option>";
          }
      }  
  }
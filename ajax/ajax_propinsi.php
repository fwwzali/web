<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['k_negara'])) {
          //query SQL
          $k_negara = $_GET['k_negara'];
          $query = "SELECT * FROM m_propinsi WHERE k_negara = '$k_negara'"; 

          //eksekusi query
          $propinsi = mysqli_query(connection(),$query);

          while($data = mysqli_fetch_array($propinsi)){
            echo "<option value='".$data['k_propinsi']."'>".$data['content']."</option>";
          }
      }  
  }
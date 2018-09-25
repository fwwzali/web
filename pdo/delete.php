<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nrp'])) {
          //query SQL
          $nrp_upd = $_GET['nrp'];
          $query = $conn->prepare("DELETE FROM mhs WHERE nrp = :nrp ");
          //binding data
          $query->bindParam(':nrp',$nrp_upd);
          //eksekusi query
          if ($query->execute()) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          //redirect ke halaman lain
          header('Location: index.php?status='.$status);
      }  
  }
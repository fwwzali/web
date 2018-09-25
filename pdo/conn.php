<?php 

   
   // membuat konekesi ke database system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "mhs";

   try {
      //membuat object PDO untuk koneksi ke database
      $conn = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbPass);
      // setting ERROR mode PDO: ada tiga mode error mode silent, warning, exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $err)
   {
      echo "Failed Connect to Database Server : " . $err->getMessage();
   }

   

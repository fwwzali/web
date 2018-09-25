<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nrp = $_POST['nrp'];
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $alamat = $_POST['alamat'];
      
      //query with PDO
      $query = $conn->prepare("INSERT INTO mhs (nrp, nama, jenis_kelamin, alamat) VALUES(:nrp, :nama, :jenis_kelamin, :alamat)"); 

      //binding data
      $query->bindParam(':nrp',$nrp);
      $query->bindParam(':nama',$nama);
      $query->bindParam(':jenis_kelamin',$jenis_kelamin);
      $query->bindParam(':alamat',$alamat);

      //eksekusi query
      if ($query->execute()) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Mahasiswa</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <label>NRP</label>
              <input type="text" class="form-control" placeholder="NRP mahasiswa" name="nrp" required="required">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama mahasiswa" name="nama" required="required">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="custom-select" name="jenis_kelamin" required="required">
                <option selected value="">Pilih Salah Satu</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" required="required"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
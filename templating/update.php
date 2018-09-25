<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php');

  //include header
  include ('template/header.php'); 
  include ('template/sidebar.php'); 

  $status = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nrp'])) {
          //query SQL
          $nrp_upd = $_GET['nrp'];
          $query = $conn->prepare("SELECT * FROM mhs WHERE nrp = :nrp");
          //binding data
          $query->bindParam(':nrp',$nrp_upd);
          //eksekusi query
          $query->execute(); 
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nrp = $_POST['nrp'];
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $alamat = $_POST['alamat'];
      //query SQL
      $query = $conn->prepare("UPDATE mhs SET nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat WHERE nrp=:nrp"); 

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

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }
  

?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

          <h2 style="margin: 30px 0 30px 0;">Update Data Mahasiswa</h2>
          <form action="update.php" method="POST">
            <?php while($data = $query->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="form-group">
              <label>NRP</label>
              <input type="text" class="form-control" placeholder="NRP mahasiswa" name="nrp" value="<?php echo $data['nrp'];  ?>" readonly required="required">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama mahasiswa" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="custom-select" name="jenis_kelamin" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="L" <?php echo $data['jenis_kelamin']=='L' ? "selected" : "" ?>>Laki-Laki</option>
                <option value="P" <?php echo $data['jenis_kelamin']=='P' ? "selected" : "" ?>>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" required="required"><?php echo $data['alamat'];  ?></textarea>
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

<?php include ('template/footer.php'); ?>
    <?php 

        $current_url = $_SERVER['PHP_SELF'];
        //echo $current_url; exit;

     ?>
    <div class="container-fluid">
      <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link <?php echo $current_url === '/web/templating/index.php' ? 'active' : '' ?>" href="<?php echo "index.php"; ?>" >Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $current_url === '/web/templating/form.php' ? 'active' : '' ?>" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
            </ul>
          </div>
        </nav>
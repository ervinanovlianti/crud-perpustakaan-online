<?php
    include 'koneksi.php';  
    if(isset($_POST['submit'])) {
      $query = mysqli_query($conn, "SELECT max(id_buku) as id FROM tb_buku");
        $data = mysqli_fetch_array($query);
        $idBuku = $data ['id'];

        $urutan = (int) substr($idBuku, 1, 5);
        $urutan++;

        $huruf = "B";
        $idBuku = $huruf . sprintf("%05s", $urutan);
    
    $insert = mysqli_query($conn,"INSERT INTO tb_buku VALUES (
      '".$idBuku."', 
      '".$_POST['kode_buku']."',
      '".$_POST['judul_buku']."',
      '".$_POST['penulis_buku']."',
      '".$_POST['penerbit_buku']."',
      '".$_POST['tahun_terbit']."',
      '".$_POST['stok']."'

      )");

    // mengambil data barang dengan kode paling besar
    if($insert){
      echo '<script>window.location="read-buku.php?id='.$idBuku.'"</script>';
  }else{
      echo 'huft coba lagi '.mysqli_error($conn);
  }
        
}
?>
                     
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pendaftaran Buku Baru Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React." />
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        
      </div>
      <!-- Awal -->
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
              <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="app-header__mobile-menu">
            <div>
              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
          <div class="app-header__menu">
            <span>
              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
          </div>
          <div class="scrollbar-sidebar">
          <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading"><a href="index.php">Dashboards</a></li>
                <li class="app-sidebar__heading">Pendaftaran</li>
                <li>
                  <a href="crud-input-anggota.php" class="mm-active"><i class="metismenu-icon pe-7s-add-user"></i>
                    Anggota
                  </a>
                </li>
                <li>
                  <a href="crud-input-anggota.php"> <i class="metismenu-icon pe-7s-notebook"></i>
                    Buku
                  </a>
                </li>
                
                <li class="app-sidebar__heading">Report</li>
                <li>
                  <a href="crud-read-anggota.php"><i class="metismenu-icon pe-7s-id"></i>
                    Data Anggota  
                  </a>
                </li>
                <li>
                  <a href="crud-read-anggota.php"><i class="metismenu-icon pe-7s-bookmarks"></i>
                    Data Buku
                  </a>
                </li>
                <li class="app-sidebar__heading">Aktivitas</li>
                <li>
                  <a href="crud-read-anggota.php"><i class="metismenu-icon pe-7s-up-arrow"></i>
                    Peminjaman 
                  </a>
                </li>
                <li>
                  <a href="crud-read-anggota.php"><i class="metismenu-icon pe-7s-bottom-arrow"></i>
                    Pengembalian
                  </a>
                </li>
                <li>
                <li class="app-sidebar__heading">Setting</li>
                <li>
                <a href="logout.php"><i class="metismenu-icon pe-7s-power"></i>
                    Logout
                  </a>
                </li>
                </li>
                </ul>
            </div>
          </div>
        </div>
        <div class="app-main__outer">
          <div class="app-main__inner">
            <div class="app-page-title">
              <div class="page-title-wrapper">
                <div class="page-title-heading">
                  <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark"> </i>
                  </div>
                  <!-- Awal Form -->
                  <div>
                    Form Penginputan Buku
                    <div class="page-title-subheading">
                      Silahkan Isi Biodata Anda Di bawah Ini Dengan Tepat.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                  <div class="col-md-6">
                    <div class="main-card mb-3 card">
                      <div class="card-body">
                        <h5 class="card-title">Data Buku</h5>
                           <form action="" method="post">

                          <div class="position-relative form-group"><label>Kode Buku</label><input name="kode_buku" class="form-control"  /></div>
                          <div class="position-relative form-group"><label>Judul Buku</label><input name="judul_buku" class="form-control"  /></div>
                          <div class="position-relative form-group"><label>Penulis</label><input name="penulis_buku" class="form-control"  /></div>
                          <div class="position-relative form-group"><label>Penerbit</label><input name="penerbit_buku" class="form-control"  /></div>
                          <div class="position-relative form-group"><label>Tahun Terbit</label><input name="tahun_terbit" class="form-control"  /></div>
                          <div class="position-relative form-group"><label>Stok</label><input name="stok" class="form-control"  /></div>
                          <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="app-wrapper-footer">
            <div class="app-footer">
              <div class="app-footer__inner">
                <div class="app-footer-right">
                  <ul class="nav">
                    <li class="nav-item">
                      <a href="javascript:void(0);" class="nav-link">
                        copyright by @tugasakhir 2021
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
  </body>
</html>

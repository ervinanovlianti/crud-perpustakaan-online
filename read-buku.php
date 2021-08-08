<?php
    include 'koneksi.php';
    session_start();
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location = "login.php"</script>';
    }
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components." />
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./main.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Penting!!! -->
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
      <!-- Penting!!! -->
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
                  <a href="crud-input-anggota.php"> <i class="metismenu-icon pe-7s-add-user"></i>
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
                  <a href="crud-read-buku.php" class="active"><i class="metismenu-icon pe-7s-bookmarks"></i>
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
                    <i class="pe-7s-notebook icon-gradient bg-mean-fruit"> </i>
                  </div>
                  <div>
                    Data Buku
                    <div class="page-title-subheading">Data Buku yang ada di perpustakaan.</div>
                  </div>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="card-title">
              <a class="btn btn-outline-primary" href="crud-input-anggota.php" role="button">Baru</a>
              <a class="btn btn-outline-primary" href="report-cetak-anggota.php" role="button">Cetak</a>
                </div>
                <div class="main-card mb-3 card">
                  <div class="card-header">
                    Data Buku
                  </div>
                  <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">ID</th>
                          <th class="text-center">Kode</th>
                          <th class="text-center">Judul</th>
                          <th class="text-center">Penulis</th>
                          <th class="text-center">Penerbit</th>
                          <th class="text-center">Tahun Terbit</th>
                          <th class="text-center">Stok Buku</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1;
                        $list_buku= mysqli_query($conn, "SELECT * FROM tb_buku ");
                        while($row = mysqli_fetch_array($list_buku)){
                      ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_buku'] ?></td>
                      <td><?php echo $row['kode_buku'] ?></td>
                      <td><?php echo $row['judul_buku'] ?></td>
                      <td><?php echo $row['penulis_buku'] ?></td>
                      <td><?php echo $row['penerbit_buku'] ?></td>
                      <td><?php echo $row['tahun_terbit'] ?></td>
                      <td><?php echo $row['stok'] ?></td>
                      <td>
                      <a href="detail-buku.php?id=<?php echo $row['id_buku'] ?>">
                      <button class="mr-1 btn-icon btn-icon-only btn btn-outline-primary"><i class="pe-7s-more btn-icon-wrapper"> </i></button></a>
                      <a href="delete-buku.php?id=<?php echo $row['id_buku'] ?>">
                      <button class="mr-1 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button></a>
                      <a href="edit-buku.php?id=<?php echo $row['id_buku'] ?>">
                      <button class="mr-1 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit btn-icon-wrapper"> </i></button>
                      </a>
                      
                                        
                                        
        
                        <a href="crud-update-anggota.php?id=<?php echo $row['id_buku'] ?>"> </a>
                        <a href="delete-buku.php?id=<?php echo $row['id_buku'] ?>" onclick="return confirm('Yakin ?')"></a>
                      </td>
                    </tr>
                    <?php } ?>
                      </tbody>
                    </table>
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
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
  </body>
</html>

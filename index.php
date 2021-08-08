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
    <script type="text/javascript" src="chart.js"></script>
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
        <div class="app-header__content">
          
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
                  <a href="input-buku.php"> <i class="metismenu-icon pe-7s-notebook"></i>
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
                  <a href="read-buku.php"><i class="metismenu-icon pe-7s-bookmarks"></i>
                    Data Buku
                  </a>
                </li>
                <li class="app-sidebar__heading">Aktivitas</li>
                <li>
                  <a href="#act-peminjaman.php"><i class="metismenu-icon pe-7s-up-arrow"></i>
                    Peminjaman 
                  </a>
                </li>
                <li>
                  <a href="#act-pengembalian.php"><i class="metismenu-icon pe-7s-bottom-arrow"></i>
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
                                        <i class="pe-7s-bandaid icon-gradient bg-amy-crisp">
                                        </i>
                                    </div>
                                    <div>Statistika
                                        <div class="page-title-subheading">Persentasi data anggota perpustakaan
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>            
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Jurusan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Jenis Kelamin</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                            <h5 class="card-title">Pie Chart</h5>
                                              <!-- Chart js -->
                                                <div style="height: 300px">
                                              <canvas id="pieChart"></canvas>
                                            </div>
                                            <script>
                                              var ctx = document.getElementById("pieChart").getContext('2d');
                                              var myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                  labels: ["Sistem Informasi", "Tehnik Informatika", "Manajemen Informatika"],
                                                  datasets: [{
                                                    label: '',
                                                    data: [
                                                    <?php 
                                                    $jumlah_si = mysqli_query($conn,"select * from anggota where jurusan_anggota='Sistem Informasi'");
                                                    echo mysqli_num_rows($jumlah_si);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_tk = mysqli_query($conn,"select * from anggota where jurusan_anggota='Teknik Informatika'");
                                                    echo mysqli_num_rows($jumlah_tk);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_mi = mysqli_query($conn,"select * from anggota where jurusan_anggota='Manajemen Informatika'");
                                                    echo mysqli_num_rows($jumlah_mi);
                                                    ?>, 
                                                    ],
                                                    backgroundColor: [
                                                    '#31e4ff',
                                                    '#e4ff31',
                                                    '#ff31e4',
                                                    
                                                    ],
                                                    borderColor: [
                                                    '#03b3ff',
                                                    '#ebeb3d',
                                                    '#ff03b3',
                                                    
                                                    ],
                                                    borderWidth: 1
                                                  }]
                                                },
                                                options: {
                                                  scales: {
                                                    yAxes: [{
                                                      ticks: {
                                                        beginAtZero:true
                                                      }
                                                    }]
                                                  }
                                                }
                                              });
                                            </script>     
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Jurusan Line Bar</h5>
                                                <!-- Chart js -->
                                                <div style="height: 300px">
                                              <canvas id="lineChart"></canvas>
                                            </div>
                                            <script>
                                              var ctx = document.getElementById("lineChart").getContext('2d');
                                              var myChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                  labels: ["Sistem Informasi", "Tehnik Informatika", "Manajemen Informatika"],
                                                  datasets: [{
                                                    label: '',
                                                    data: [
                                                    <?php 
                                                    $jumlah_si = mysqli_query($conn,"select * from anggota where jurusan_anggota='Sistem Informasi'");
                                                    echo mysqli_num_rows($jumlah_si);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_tk = mysqli_query($conn,"select * from anggota where jurusan_anggota='Teknik Informatika'");
                                                    echo mysqli_num_rows($jumlah_tk);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_mi = mysqli_query($conn,"select * from anggota where jurusan_anggota='Manajemen Informatika'");
                                                    echo mysqli_num_rows($jumlah_mi);
                                                    ?>, 
                                                    ],
                                                    backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    
                                                    ],
                                                    borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    
                                                    ],
                                                    borderWidth: 1
                                                  }]
                                                },
                                                options: {
                                                  scales: {
                                                    yAxes: [{
                                                      ticks: {
                                                        beginAtZero:true
                                                      }
                                                    }]
                                                  }
                                                }
                                              });
                                            </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                            <div class="card-body">
                                            <h5 class="card-title">Bar Chart</h5>
                                              <!-- Chart js -->
                                                <div style="height: 300px">
                                              <canvas id="barChart"></canvas>
                                            </div>
                                            <script>
                                              var ctx = document.getElementById("barChart").getContext('2d');
                                              var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                  labels: ["Sistem Informasi", "Tehnik Informatika", "Manajemen Informatika"],
                                                  datasets: [{
                                                    label: '',
                                                    data: [
                                                    <?php 
                                                    $jumlah_si = mysqli_query($conn,"select * from anggota where jurusan_anggota='Sistem Informasi'");
                                                    echo mysqli_num_rows($jumlah_si);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_tk = mysqli_query($conn,"select * from anggota where jurusan_anggota='Teknik Informatika'");
                                                    echo mysqli_num_rows($jumlah_tk);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_mi = mysqli_query($conn,"select * from anggota where jurusan_anggota='Manajemen Informatika'");
                                                    echo mysqli_num_rows($jumlah_mi);
                                                    ?>, 
                                                    ],
                                                    backgroundColor: [
                                                    '#ff4a3a',
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    
                                                    ],
                                                    borderColor: [
                                                    '#ff4a3a',
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    ],
                                                    borderWidth: 1
                                                  }]
                                                },
                                                options: {
                                                  scales: {
                                                    yAxes: [{
                                                      ticks: {
                                                        beginAtZero:true
                                                      }
                                                    }]
                                                  }
                                                }
                                              });
                                            </script>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Jurusan Line Bar</h5>
                                                <!-- Chart js -->
                                                <div style="height: 300px">
                                              <canvas id="barjkChart"></canvas>
                                            </div>
                                            <script>
                                              var ctx = document.getElementById("barjkChart").getContext('2d');
                                              var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                  labels: ["Laki-laki", "Perempuan"],
                                                  datasets: [{
                                                    label: '',
                                                    data: [
                                                    <?php 
                                                    $jumlah_lk = mysqli_query($conn,"select * from anggota where jk_anggota='Laki-laki'");
                                                    echo mysqli_num_rows($jumlah_lk);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_pr = mysqli_query($conn,"select * from anggota where jk_anggota='Perempuan'");
                                                    echo mysqli_num_rows($jumlah_pr);
                                                    ?>, 
                                                    ],
                                                    backgroundColor: [
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    ],
                                                    borderColor: [
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    ],
                                                    borderWidth: 1
                                                  }]
                                                },
                                                options: {
                                                  scales: {
                                                    yAxes: [{
                                                      ticks: {
                                                        beginAtZero:true
                                                      }
                                                    }]
                                                  }
                                                }
                                              });
                                            </script>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Jenis Kelamin Line Bars</h5>
                                                <!-- Chart js -->
                                                <div style="height: 300px">
                                              <canvas id="linejkChart"></canvas>
                                            </div>
                                            <script>
                                              var ctx = document.getElementById("linejkChart").getContext('2d');
                                              var myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                  labels: ["Laki-laki", "Perempuan"],
                                                  datasets: [{
                                                    label: '',
                                                    data: [
                                                    <?php 
                                                    $jumlah_lk = mysqli_query($conn,"select * from anggota where jk_anggota='Laki-laki'");
                                                    echo mysqli_num_rows($jumlah_lk);
                                                    ?>, 
                                                    <?php 
                                                    $jumlah_pr = mysqli_query($conn,"select * from anggota where jk_anggota='Perempuan'");
                                                    echo mysqli_num_rows($jumlah_pr);
                                                    ?>, 
                                                    ],
                                                    backgroundColor: [
                                                    
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    
                                                    ],
                                                    borderColor: [
                                                    '#4a3aff',
                                                    '#3aff4a',
                                                    ],
                                                    borderWidth: 1
                                                  }]
                                                },
                                                options: {
                                                  scales: {
                                                    yAxes: [{
                                                      ticks: {
                                                        beginAtZero:true
                                                      }
                                                    }]
                                                  }
                                                }
                                              });
                                            </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                                        </i>
                                    </div>
                                    <div>PROJECT KELOMPOK
                                        <div class="page-title-subheading">Projek sederhana untuk memenuhi tugas praktikum pemrograman web II .
                                        </div>
                                    </div>
                                </div>
                                    </div>
                        </div>            
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ervina Novlianti</div>
                                                <div class="widget-subheading">SI RS 41</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><span>11194036</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Nurul Qalbi Haeruddin</div>
                                                <div class="widget-subheading">SI RS 41</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-primary"><span>11194048</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider mt-0" style="margin-bottom: 30px;"></div>
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

<?php
    include 'koneksi.php';
    session_start();
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location = "login.php"</script>';
    }
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_buku WHERE id_buku= '".$_GET['id']."'");
        echo '<script>window.location="read-buku.php"</script>';
    }
?>
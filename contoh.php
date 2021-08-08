<?php
    include 'koneksi.php';
//proses input data
    if(isset($_POST['submit'])) {
        $tahun = ($_POST['thn_ajaran']);
        $jurusan = ($_POST['thn_ajaran']);
        $nama = ($_POST['nama_anggota']);
        $tempat = ($_POST['tmp_lahir']);
        $tanggal = ($_POST['tgl_lahir']);
        $jk = ($_POST['jk_anggota']);
        $alamat = ($_POST['alamat_anggota']);
        
        $insert = mysqli_query($conn, "INSERT INTO anggota VALUES ('$tahun','$jurusan','$nama','$tempat','$tanggal','$jk','$alamat')");

            if($insert){
                echo "<h2><font color = blue>BERHASIl</font></h2>";
            }else{
                echo "<h2><font color = red>Gagal</font></h2>";
            }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>PMB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Bagian Box Formulir -->
    <section class="box-formulir">
        <h2>Formulir</h2>
        <!-- bagian form -->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="thn_ajaran" class="input-control" value="2021/2022" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan_anggota">
                                <option value="">--Pilih--</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_anggota" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk_anggota" class="input-control" value="Laki-laki"> Laki-laki 
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk_anggota" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat_anggota"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>    
                            <input class="btn-daftar" type="submit" name="submit" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>
            </h3>
        </form>
    </section>
</body>
</html>
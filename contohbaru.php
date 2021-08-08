<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])) {
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_anggota, 5)) AS id FROM anggota");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        echo $generateId;

        //proses insert
        $insert = mysqli_query($conn, "INSERT INTO anggota VALUES (
                '".$generateId."', 
                '".date('Y-m-d')."',
                '".$_POST['thn_ajaran']."',
                '".$_POST['nama_anggota']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jk_anggota']."',
                '".$_POST['jurusan_anggota']."',
                '".$_POST['notelp_anggota']."',
                '".$_POST['alamat_anggota']."'
            )");

            if($insert){
                echo "<h2><font color = blue>BERHASIl</font></h2>";
            }else{
                echo "<h2><font color = red>Gagal</font></h2>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Anggota Baru Perpustakaan</title>
    <!-- <link href="./main.css" rel="stylesheet" /> -->
  </head>
  <body>
      <!-- Bagian Box Formulir -->
    <section class="box-formulir">
        <h2 colspan="2">Formulir</h2>
        <!-- bagian form -->
        <form action="" method="post">
            <table cellpadding="0" cellspacing="0" border="0" width="700">
                <tr>
                          
                    <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="thn_ajaran" class="input-control" value="2021/2022" readonly size="30">
                        </td>
                    </tr>
                    <tr>
                        <td >Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan_anggota">
                                <option value="">--Pilih--</option>
                                <option value="Sistem Informasi" >Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_anggota" class="input-control"size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control"size="30">
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
                    <tr>
                        <td>No.Telp</td>
                        <td>:</td>
                        <td>
                            <input type="text" c lass="input-control" name="notelp_anggota" size="30"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat_anggota" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>    
                            <input class="btn-daftar" type="submit" name="submit" value="Input">
                        </td>
                    </tr>
                </table>
                        </form>
                      </div>
    </section>
  </body>
</html>

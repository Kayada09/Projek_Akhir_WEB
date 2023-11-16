

<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

if (isset($_POST["ubah"])) {

  $id = $_GET["id"];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST["deskripsi"];
  $foto = $_FILES['foto']['name'];


  //cek dulu jika ada foto produk jalankan coding ini
  if ($foto != "") {

    $tanggal_hari_ini = date("Ymd");


    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file foto yang bisa diupload 
    $x = explode('.', $_FILES['foto']['name']); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $tanggal_hari_ini . '-' . $angka_acak . '.' . $ekstensi; //menggabungkan angka acak dengan nama file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($_FILES['foto']['tmp_name'], '../databaseImages/' . $nama_gambar_baru); //memindah file foto ke folder foto
      $query = "UPDATE tb_vape SET nama = '$nama',  harga = '$harga', deskripsi = '$deskripsi', foto = '$nama_gambar_baru'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='../halaman/test.php';</script>";
      }

    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi foto yang boleh hanya jpg atau png.');window.location='editData.php';</script>";
    }
  } else {
    $query = "UPDATE tb_vape SET nama = '$nama',  harga = '$harga' deskripsi ='$deskripsi'   ";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='../halaman/test.php';</script>";
    }
  }
}
?>
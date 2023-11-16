<?php
  require "koneksi.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM tb_vape WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="../css/add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="editDataAksi.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit Stok</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="text" name="harga" value="<?php echo $row["harga"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Deskripsi</label>
          <input type="text" name="deskripsi" value="<?php echo $row["deskripsi"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Gambar Stok</label>
          <input type="file" name="foto" value="<?php echo $row["foto"] ?>" required>
        </div>
        <input type="submit" value="Ubah Stok" name="ubah">
        <a href="../halaman/test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>
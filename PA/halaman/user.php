<?php
  require "../aksi/koneksi.php";
  




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/test.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <div class="title">
        <h2>Dashboard User</h2>
        <p><?php date_default_timezone_set("Asia/Makassar"); echo date("l, d F Y, H:i:s") ?></p>
      </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <td class="">ID</td>
            <td class="">Username</td>
            <td class="">Role</td>
            <td class="">Password</td>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM users");

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$row[id]</td>";
            echo "<td>$row[username]</td>";
            echo "<td>$row[role]</td>";
            echo "<td>$row[password]</td>";      
            echo "</tr>";
          }
          ?>
        </table>
        <div class="tombol">
          <a href="test.php">BACK</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
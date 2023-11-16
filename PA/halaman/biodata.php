<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutMe</title>
    <link rel="stylesheet" href="../css/biodata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="biodata.css"> -->
</head>
<body>
<div class="fContainer">
    <nav class="wrapper">
        <div class="logo">
        </div>
        <ul class="navigation">
            <li><a href="index.php" class="home">Home</a></li>
            <li><a href="shop.php" class="">shop</a></li>
            <li><a href="biodata.php" class="">ABOUT</a></li>
            <li><a href="../aksi/logout.php">LOGOUT</a></li>
            <li><img src="../gambar/foto profil.jpg" alt=""></li>
            <li><a id="darkmode-toggle"><b>Dark Mode</b></a></li> 
        </ul>
    </nav>
</div>
  <section class="introduction-section">
    <div>
        <img src="../gambar/profil.jpeg" alt="">
    </div>
      <h1>PERKENALKAN</h1>
      <p>Halo, Kami Dari Kelompok 4 Kami dari Prodi informatika Kelas A 2022 Di sini kami membuat Tugas Projek Akhir Pemrograman Web. Sebelum lanjut pada program web yang telah kami buat, mohon izin memperkenalkan anggota dari kelompok 4:</p>
      
  </section>
  <section class="location-section">
    <h1 class="data">Data Anggota Kelompok</h1>

    <table>

      <thead>
        <tr>
          <th>No</th>
          <th>Nama Anggota</th>
          <th>Nim</th>
          <th>Kelas</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>1</td>
          <td>Moammer Kayada Kamal</td>
          <td>2209106039</td>
          <td>A 2022</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Ibnu Gilang Praduta Cipta</td>
          <td>2209106040</td>
          <td>A 2022</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Muhammad Rafi Adhitama</td>
          <td>2209106041</td>
          <td>A 2022</td>
        </tr>
        

      </tbody>

    </table>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
      $(document).ready(function() {
        const darkmodeToggle = document.getElementById('darkmode-toggle')
        darkmodeToggle.addEventListener('click', function() {
          const theme = $('html').attr('data-theme');
          if(theme == 'light') {
            // * CHANGE TO DARK
            $('html').css({'filter': 'invert(1)'})
            $('html').attr('data-theme', 'dark');
            $('ul').addClass('dark-mode');
          } else {
            // * CHANGE TO LIGHT
            $('html').removeAttr('style');
            $('html').attr('data-theme', 'light')
            $('ul').removeClass('dark-mode');
          }
        });
      });
  </script>
</body>
</html>
<!-- <header class='masthead'>
    <p class='masthead-intro'>Hi Saya</p>
    <h1 class='masthead-heading'>Yudith!</h1>
  </header> -->


  
  <footer>
    <section class="footer">
      <div class="social">
        <a href="https://www.instagram.com/moammer_kayada/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCTlLGQ7fdt_lrUFe987I3zw"><i class="fab fa-youtube"></i></a>
      </div>
      <p class="copyright">
        Future Coders &copy;2023 - by Moammer Kayada Kamal
      </p>
    </section>

  </footer>
  
<?php


// Inisialisasi keranjang jika belum ada dalam sesi
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
// Ambil keranjang yang disimpan dalam sesi (jika ada)
$cart = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AboutMe</title>
  <link rel="stylesheet" href="../css/shop.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="biodata.css"> -->
</head>

<body>
  <div class="fContainer">
    <nav class="wrapper">
      <div class="logo">
      </div>
      <ul class="navigation">
        <li class="home"><a href="index.php" class="home">Home</a></li>
        <li class="shop"><a href="#" class="">shop</a></li>
        <li class="about"><a href="biodata.php" class="">Tentang</a></li>
        <li class="logout"><a href="../aksi/logout.php"><button>LOGOUT</button></a></li>
        <li><img src="../gambar/foto profil.jpg" alt=""></li>
        <li><a id="darkmode-toggle"><b>Dark Mode</b></a></li>
        <li>
          <div class="icon-cart">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
            </svg>
            <span>0</span>
        </li>
      </ul>
    </nav>
  </div>

  <section class="slider">
    <div class="card">

      <div class="card-content">
        <img src="../gambar/panda.png" alt="" class="card-img">
        <h1 class="card-title">Device</h1>
        <div class="card-body">
          <p class="price">$650</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="1" data-product-name="Device" data-product-price="650"
            data-product-image="../gambar/panda.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/hexom.png" alt="" class="card-img">
        <h1 class="card-title">Device</h1>
        <div class="card-body">
          <p class="price">$550</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="2" data-product-name="Device" data-product-price="550"
            data-product-image="../gambar/hexom.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/cen.png" alt="" class="card-img">
        <h1 class="card-title">Device</h1>
        <div class="card-body">
          <p class="price">$750</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="3" data-product-name="Device" data-product-price="750"
            data-product-image="../gambar/cen.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/r23.png" alt="" class="card-img">
        <h1 class="card-title">Device</h1>
        <div class="card-body">
          <p class="price">$1000</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="4" data-product-name="Device" data-product-price="1000"
            data-product-image="../gambar/r23.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/yb.png" alt="" class="card-img">
        <h1 class="card-title">Liquid</h1>
        <div class="card-body">
          <p class="price">$450</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="5" data-product-name="Device" data-product-price="450"
            data-product-image="../gambar/yb.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/savage.png" alt="" class="card-img">
        <h1 class="card-title">Liquid</h1>
        <div class="card-body">
          <p class="price">$350</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="6" data-product-name="Device" data-product-price="350"
            data-product-image="../gambar/savage.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/dewa.png" alt="" class="card-img">
        <h1 class="card-title">Liquid</h1>
        <div class="card-body">
          <p class="price">$250</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="7" data-product-name="Device" data-product-price="250"
            data-product-image="../gambar/dewa.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/miru.png" alt="" class="card-img">
        <h1 class="card-title">Liquid</h1>
        <div class="card-body">
          <p class="price">$150</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="8" data-product-name="Device" data-product-price="150"
            data-product-image="../gambar/miru.png">Add To Cart</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="../gambar/kapas.png" alt="" class="card-img">
        <h1 class="card-title">Kapas</h1>
        <div class="card-body">
          <p class="price">$150</p>
        </div>
        <div class="card-footer">
          <button class="btn beli add-to-cart" data-product-id="9" data-product-name="Device" data-product-price="150"
            data-product-image="../gambar/kapas.png">Add To Cart</button>
        </div>
      </div>
    </div>



    <div class="cartTab">
      <h1>Shopping Cart</h1>
      <div class="listCart">
        <?php
        $totalPrice = 0; // Inisialisasi total harga
        foreach ($cart as $item) {
          echo '<div class="item">';
          echo '<div class="image">';
          echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '">';
          echo '</div>';
          echo '<div class="name">' . $item['name'] . '</div>';
          echo '<div class="totalprice">Rp' . ($item['price'] * $item['quantity']) . '</div>';
          echo '<div class="quantity">';
          echo '<span class="minus" data-product-id="' . $item['id'] . '">-</span>';
          echo '<span>' . $item['quantity'] . '</span>';
          echo '<span class="plus" data-product-id="' . $item['id'] . '">+</span>';
          echo '</div>';
          echo '</div>';

          $totalPrice += $item['price'] * $item['quantity']; // Akumulasi total harga
        }
        ?>
      </div>
      <div class="total-price">Total: Rp
        <?php echo $totalPrice; ?>
      </div>
      <div class="btn">
        <button class="closebtn">CLOSE</button>
        <button class="checkout">CHECK OUT</button>
      </div>
    </div>

  </section>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      const darkmodeToggle = document.getElementById('darkmode-toggle')
      darkmodeToggle.addEventListener('click', function () {
        const theme = $('html').attr('data-theme');
        if (theme == 'light') {
          // * CHANGE TO DARK
          $('html').css({ 'filter': 'invert(1)' })
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
  <script src="../java/main.js"></script>

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
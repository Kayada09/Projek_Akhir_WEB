<?php
session_start();
include '../aksi/koneksi.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>DRY VAPESTORE</title>
</head>
<body>
    <!-- Pop-up box -->
    <div id="popup" class="overlay">
      <div class="window">
        <a href="#" id="closePopup" class="close-button" title="Close">X</a>
        <h1>Selamat Datang di DRY VAPESTORE  </h2>
        <p>Selamat Belanja !!!!!.</p>
      </div>
  </div>

    <div class="fContainer">
      <nav class="wrapper">
            <div class="text-wrap">
              DRY VAPESTORE
            </div>
            <ul class="navigation">
                <li><a href="index.php" class="home">Home</a></li>
                <li><a href="shop.php" class="">shop</a></li>
                <li><a href="biodata.php" class="">About</a></li>
                <li><a href="../aksi/logout.php">Logout</a></li>
                <li><img src="../gambar/foto profil.jpg" alt=""></li>
                
                <li><a  id="darkmode-toggle"onclick=ppbox()>Dark Mode</a></li> 
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

    
    <div class="slider">
      <div class="list">
          <div class="item">
              <img src="../gambar/1.jpg" alt="">
          </div>
          <div class="item">
              <img src="../gambar/2.jpg" alt="">
          </div>
          <div class="item">
              <img src="../gambar/3.jpg" alt="">
          </div>
          <div class="item">
              <img src="../gambar/5.jpeg" alt="">
          </div>
          <div class="item">
              <img src="../gambar/6.jpg" alt="">
          </div>
      </div>
      <div class="buttons">
          <button id="prev"><</button>
          <button id="next">></button>
      </div>
      <ul class="dots">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
  </div>

 
<div class="container">
    <div class="card">
      <div class="card__header">
        <img src="../gambar/r234.jpg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>Hotcig R234</h4>
        <div class="price">
          <h4>Rp 599.000</h4>
        </div>
        <p>Hotcig R234 Cyber RedNew brand from Hotcig x VapebossIsi kemasan:-elektrikal box mod R234 1x-buku panduan 1x-kartu garansi 1xSpesifikasi:Ukuran: 90x55x25mmBahan: alumunium alloyBaterai: 2 baterai 18650( Dijual Terpisah)Watt: 10.0w-234.0wResistance.</p>
        <button class="beli add-to-cart-btn" 
                data-product-id="1" 
                data-product-name="Hotcig R234 Cyber RedNew brand from Hotcig x VapebossIsi" 
                data-product-price="599.000"
                data-product-image="../gambar/r234.jpg">ADD TO CART</button>
      </div>

    </div>
    <div class="card">
      <div class="card__header">
        <img src="../gambar/rda.jpeg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>Nitrous Rda Dual Cap Only 22 Mm</h4>
        <div class="price">
          <h4>Rp 330.000</h4>
        </div>
        <p>Nitrous RDA 22mm Dual Cap Only 
          .
          Gun-Damn / Isabella / Annabella / Valentina
          .
          1X Nitrous RDA (Dual Cap Only)
          1X Coil lead guide
          1X User manual
          1X Beauty ring
          1X BF pin
          1X Spare part bag
          1X Replacement Drip tip
          1X 510 Pin
          ..</p>
          <button class="beli" 
                data-product-id="2" 
                data-product-name="Nitrous Rda Dual Cap Only 22 Mm" 
                data-product-price="330.000"
                data-product-image="../gambar/rda.jpeg">ADD TO CART</button>

      </div>

    </div>
    <div class="card">
      <div class="card__header">
        <img src="../gambar/liquid.jpeg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>Savage Recall Grape Gel Fux By Vem Juice X Oura 6Mg 60Ml Liquid</h4>
        <div class="price">
          <h4>Rp 120.000</h4>
        </div>
        <p>SAVAGE RECALL E-LIQUID LOCAL BY VEM JUICE X OURA
          FLAVOR : GRAPE GEL FLUX.</p>
        <button class="beli" 
                data-product-id="3" 
                data-product-name="Savage Recall Grape Gel Fux By Vem Juice X Oura 6Mg 60Ml Liquid" 
                data-product-price="120.000"
                data-product-image="../gambar/liquid.jpeg">ADD TO CART</button>

      </div>

    </div>
    <div class="card">
      <div class="card__header">
        <img src="../gambar/vrk.jpeg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>VRK Battery 18650 3000mAh 40A 3.7V</h4>
        <div class="price">
          <h4>Rp 120.000</h4>
        </div>
        <p>Capacity:3000mAh. -Nominal Voltage : 3.7V. -Continuous Discharge Current : 15A. -Max. Discharge Current : 40A.</p>
        <button class="beli" 
                data-product-id="4" 
                data-product-name="VRK Battery 18650 3000mAh 40A 3.7V" 
                data-product-price="120.000"
                data-product-image="../gambar/vrk.jpeg">ADD TO CART</button>

      </div>
      
    </div>
    <div class="card">
      <div class="card__header">
        <img src="../gambar/coil.jpeg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>Inhale Baby Alien Coil</h4>
        <div class="price">
          <h4>Rp 60.000</h4>
        </div>
        <p>Alien Light Inhale Alien Light Prebuilt Coil Vape for Single Coil,</p>
        <button class="beli" 
                data-product-id="5" 
                data-product-name="Inhale Baby Alien Coil" 
                data-product-price="60.000"
                data-product-image="../gambar/coil.jpeg">ADD TO CART</button>

      </div>
      
    <?php
          include('../aksi/koneksi.php');
          $query = "SELECT * FROM tb_vape ORDER BY id ASC";
          $result = mysqli_query($koneksi, $query);
          if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
          }

          $count = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<div class="card__header">';
            echo '<img src="../databaseImages/' . $row['foto'] . '"  alt="' . $row['nama'] . '" class="card__image" width="600" height ="auto">';
            echo '<div class="card__body">';
            echo '<h2>' . $row['nama'] . '</h2>';
            echo '<div class="price">';
            echo '<h4>Rp' . $row['harga'] . '</h4>';
            echo '<p>' . $row['deskripsi'] . '</p>';
            echo '</div>';
            echo '<button class="beli" data-product-id="' . $row['id'] . '" data-product-name="' . $row['nama'] . '" data-product-price="' . $row['harga'] . '" data-product-image="../databaseImages/' . $row['foto'] . '">Add to Cart</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $count++;
            if ($count % 2 == 0) {
              echo '<div class="clearfix"></div>'; // Add a clearfix after every 2 skins
            }
          }
          ?>

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
  

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {
        $('.add-to-cart-btn').click(function(e) {
            e.preventDefault();

            var productId = $(this).data('product-id');
            var productName = $(this).data('product-name');
            var productPrice = $(this).data('product-price');
            var productImage = $(this).data('product-image');

            // Kirim permintaan AJAX ke server untuk menambahkan produk ke keranjang
            $.ajax({
                type: 'POST',
                url: '../add_to_cart.php', // Ganti dengan nama file yang sesuai
                data: {
                    add_to_cart: true,
                    product_id: productId,
                    product_name: productName,
                    product_price: productPrice,
                    product_image: productImage
                },
                success: function(response) {
                    // Tanggapan dari server (jika perlu)
                    // Misalnya, perbarui jumlah barang di keranjang
                    var cartCount = parseInt(response);
                    $('.icon-cart span').text(cartCount);
                }
            });
        });
    });

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
<script src="../java/main.js"></script>
</body>

</html>
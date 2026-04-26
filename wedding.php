<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="wedding" class="container_wedding">

  <div class="wedding_header">
    <h1>Wedding Décor Styles</h1>
    <p>From timeless elegance to modern romance, our wedding themes bring your love story to life with flowers, lights,
      and unforgettable decor.</p>
  </div>

  <div class="wedding_gallery">

    <div class="wedding_card">
      <div class="wedding_img" style="background-image: url('./Images_ProjectG/wedding/wedding1.jpg');"></div>
      <h2>Royal Elegance</h2>
      <p>Luxurious gold and ivory tones — perfect for a grand, majestic wedding celebration.</p>
      <p class="price">Starting from Rs. 45,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Royal Elegance Decor">
        <input type="hidden" name="item_price" value="45000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="wedding_card">
      <div class="wedding_img" style="background-image: url('./Images_ProjectG/wedding/wedding2.jpg');"></div>
      <h2>Rustic Charm</h2>
      <p>Wood textures, fairy lights, and floral touches for a cozy countryside atmosphere.</p>
      <p class="price">Starting from Rs. 38,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Rustic Charm Decor">
        <input type="hidden" name="item_price" value="38000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="wedding_card">
      <div class="wedding_img" style="background-image: url('./Images_ProjectG/wedding/wedding3.jpg');"></div>
      <h2>Modern Minimalist</h2>
      <p>Clean lines and neutral palettes — sophistication in simplicity.</p>
      <p class="price">Starting from Rs. 40,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Modern Minimalist Decor">
        <input type="hidden" name="item_price" value="40000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="wedding_card">
      <div class="wedding_img" style="background-image: url('./Images_ProjectG/wedding/wedding4.jpg');"></div>
      <h2>Floral Fantasy</h2>
      <p>A vibrant floral experience that transforms any venue into a romantic paradise.</p>
      <p class="price">Starting from Rs. 42,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Floral Fantasy Decor">
        <input type="hidden" name="item_price" value="42000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

  </div>

  <div class="back_btn">
    <a href="index.php">← Back to Home</a>
  </div>

</div>

<?php
include "./components/footer.php";
?>

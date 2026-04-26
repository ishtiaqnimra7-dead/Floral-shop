<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="anniversary" class="container_anniversary">

  <div class="anniversary_header">
    <h1>Anniversary Themes</h1>
    <p>Celebrate love, memories, and togetherness with themes designed to make your special day timeless and meaningful.</p>
  </div>

  <div class="anniversary_gallery">

    <div class="anniversary_card">
      <div class="anniversary_img" style="background-image: url('./Images_ProjectG/anniversary/anniversary1.jpg');"></div>
      <h2>Golden Romance</h2>
      <p>Elegant gold and cream tones — a symbol of enduring love and commitment.</p>
      <p class="price">Starting from Rs. 20,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Golden Romance">
        <input type="hidden" name="item_price" value="20000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="anniversary_card">
      <div class="anniversary_img" style="background-image: url('./Images_ProjectG/anniversary/anniversary2.jpg');"></div>
      <h2>Starry Night</h2>
      <p>Midnight blues, twinkling lights, and dreamy ambiance — perfect for evening celebrations.</p>
      <p class="price">Starting from Rs. 22,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Starry Night">
        <input type="hidden" name="item_price" value="22000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="anniversary_card">
      <div class="anniversary_img" style="background-image: url('./Images_ProjectG/anniversary/anniversary3.jpg');"></div>
      <h2>Vintage Love</h2>
      <p>Rustic tones, candles, and delicate roses — a classic setup full of nostalgia.</p>
      <p class="price">Starting from Rs. 18,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Vintage Love">
        <input type="hidden" name="item_price" value="18000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="anniversary_card">
      <div class="anniversary_img" style="background-image: url('./Images_ProjectG/anniversary/anniversary4.jpg');"></div>
      <h2>Modern Glam</h2>
      <p>Bold contrasts and chic details — for couples who love a stylish, modern vibe.</p>
      <p class="price">Starting from Rs. 24,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Modern Glam">
        <input type="hidden" name="item_price" value="24000">
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

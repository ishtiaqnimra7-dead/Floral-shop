<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="birthday" class="container_birthday">

  <div class="birthday_header">
    <h1>Birthday Setups</h1>
    <p>Make every birthday unforgettable — from dreamy pastel setups to vibrant party vibes, we’ve got the perfect theme
      for every age and personality.</p>
  </div>

  <div class="birthday_gallery">

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday1.jpg');"></div>
      <h2>Pastel Dreams</h2>
      <p>Soft hues and gentle lights — perfect for elegant and minimal birthday celebrations.</p>
      <p class="price">Starting from Rs. 12,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Pastel Dreams">
        <input type="hidden" name="item_price" value="12000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday2.jpg');"></div>
      <h2>Neon Night</h2>
      <p>Vibrant, energetic, and fun — bring the dance floor to life with glowing neon decor.</p>
      <p class="price">Starting from Rs. 14,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Neon Night">
        <input type="hidden" name="item_price" value="14000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday3.jpg');"></div>
      <h2>Garden Bliss</h2>
      <p>Fresh flowers, fairy lights, and a serene green ambiance — nature-inspired celebration.</p>
      <p class="price">Starting from Rs. 13,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Garden Bliss">
        <input type="hidden" name="item_price" value="13000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday4.jpg');"></div>
      <h2>Royal Gold</h2>
      <p>Elegant gold tones and luxury setups — perfect for milestone birthdays and grand celebrations.</p>
      <p class="price">Starting from Rs. 15,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Royal Gold">
        <input type="hidden" name="item_price" value="15000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday5.jpg');"></div>
      <h2>Boho Chic</h2>
      <p>Trendy and cozy setup with neutral tones, macramé details, and floral accents.</p>
      <p class="price">Starting from Rs. 12,500</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Boho Chic">
        <input type="hidden" name="item_price" value="12500">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday6.jpg');"></div>
      <h2>Kids Carnival</h2>
      <p>Colorful balloons, fun props, and games — the perfect setup for your little one’s big day.</p>
      <p class="price">Starting from Rs. 10,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Kids Carnival">
        <input type="hidden" name="item_price" value="10000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday7.jpg');"></div>
      <h2>Hollywood Glam</h2>
      <p>Red carpet vibes with lights, glitter, and elegance — turn the birthday into a star night.</p>
      <p class="price">Starting from Rs. 16,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Hollywood Glam">
        <input type="hidden" name="item_price" value="16000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="birthday_card">
      <div class="birthday_img" style="background-image: url('./Images_ProjectG/birthday/birthday8.jpg');"></div>
      <h2>Rainbow Fiesta</h2>
      <p>Bright and cheerful multicolor setup — perfect for spreading happiness and fun.</p>
      <p class="price">Starting from Rs. 11,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Rainbow Fiesta">
        <input type="hidden" name="item_price" value="11000">
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
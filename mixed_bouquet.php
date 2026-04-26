<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="bouquets" class="container_bouquets">
  <div class="bouquets_header">
    <h1>Our Mixed Bouquets Collection</h1>
    <p>Delightful blends of blooms — handcrafted to express every emotion beautifully.</p>
  </div>

  <div class="bouquets_gallery">

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet1.jpg');"></div>
      <h2>Classic Red & White</h2>
      <p>A timeless mix of red roses and white lilies — symbolizing love and purity.</p>
      <p class="price">Rs. 1800 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Classic Red & White">
        <input type="hidden" name="item_price" value="1800">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet2.jpg');"></div>
      <h2>Spring Charm</h2>
      <p>Bright tulips and daisies combined to bring joy and warmth to any day.</p>
      <p class="price">Rs. 1500 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Spring Charm">
        <input type="hidden" name="item_price" value="1500">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet3.jpg');"></div>
      <h2>Pastel Perfection</h2>
      <p>Soft pinks and lavenders — ideal for birthdays, anniversaries, and gentle gestures.</p>
      <p class="price">Rs. 1700 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Pastel Perfection">
        <input type="hidden" name="item_price" value="1700">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet4.jpg');"></div>
      <h2>Sunshine Delight</h2>
      <p>A radiant mix of yellow tulips and orange roses — bursting with happiness.</p>
      <p class="price">Rs. 1600 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Sunshine Delight">
        <input type="hidden" name="item_price" value="1600">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet5.jpg');"></div>
      <h2>Elegant Whites</h2>
      <p>Pure white lilies and roses — a graceful choice for sympathy or weddings.</p>
      <p class="price">Rs. 2000 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Elegant Whites">
        <input type="hidden" name="item_price" value="2000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet6.jpg');"></div>
      <h2>Rainbow Love</h2>
      <p>A colorful mix of tulips and carnations — a vibrant celebration of life.</p>
      <p class="price">Rs. 1900 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Rainbow Love">
        <input type="hidden" name="item_price" value="1900">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet7.jpg');"></div>
      <h2>Golden Glow</h2>
      <p>Yellow roses with white orchids — radiating positivity and calm energy.</p>
      <p class="price">Rs. 2100 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Golden Glow">
        <input type="hidden" name="item_price" value="2100">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet8.jpg');"></div>
      <h2>Royal Romance</h2>
      <p>Deep red and purple blooms — for moments filled with love and elegance.</p>
      <p class="price">Rs. 2300 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Royal Romance">
        <input type="hidden" name="item_price" value="2300">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet9.jpg');"></div>
      <h2>Sweet Serenity</h2>
      <p>Soft whites and light pinks — a peaceful expression of care and comfort.</p>
      <p class="price">Rs. 1750 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Sweet Serenity">
        <input type="hidden" name="item_price" value="1750">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet10.jpg');"></div>
      <h2>Fresh Garden Mix</h2>
      <p>A lush blend of seasonal flowers — crafted to bring nature indoors.</p>
      <p class="price">Rs. 1900 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Fresh Garden Mix">
        <input type="hidden" name="item_price" value="1900">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet11.jpg');"></div>
      <h2>Midnight Elegance</h2>
      <p>Dark orchids with white roses — a sophisticated and dramatic combination.</p>
      <p class="price">Rs. 2500 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Midnight Elegance">
        <input type="hidden" name="item_price" value="2500">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="bouquet_card">
      <div class="bouquet_img" style="background-image: url('./Images_ProjectG/bouquets/bouquet12.jpg');"></div>
      <h2>Romantic Blush</h2>
      <p>Delicate pink roses and carnations — the perfect gift for someone special.</p>
      <p class="price">Rs. 1800 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Romantic Blush">
        <input type="hidden" name="item_price" value="1800">
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

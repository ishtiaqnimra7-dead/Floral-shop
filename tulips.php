<?php
session_start();
include "./components/head.php";
include "./components/header.php";
?>

<div id="tulips" class="container_tulips">
  <div class="tulips_header">
    <h1>Our Tulips Collection</h1>
    <p>Bright, graceful, and full of charm — our tulips bring the joy of spring to every season.</p>
  </div>

  <div class="tulips_gallery">

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips1.jpg');"></div>
      <h2>Red Tulips</h2>
      <p>Symbol of true love and perfect passion — ideal for romantic gestures.</p>
      <p class="price">Rs. 230 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Red Tulips">
        <input type="hidden" name="item_price" value="230">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips2.jpg');"></div>
      <h2>Yellow Tulips</h2>
      <p>Radiant and cheerful — expressing sunshine, friendship, and joy.</p>
      <p class="price">Rs. 220 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Yellow Tulips">
        <input type="hidden" name="item_price" value="220">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips3.jpg');"></div>
      <h2>Pink Tulips</h2>
      <p>Soft and graceful — a perfect symbol of affection and caring.</p>
      <p class="price">Rs. 240 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Pink Tulips">
        <input type="hidden" name="item_price" value="240">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips4.jpg');"></div>
      <h2>White Tulips</h2>
      <p>Elegant and serene — representing purity, forgiveness, and peace.</p>
      <p class="price">Rs. 230 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="White Tulips">
        <input type="hidden" name="item_price" value="230">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips5.jpg');"></div>
      <h2>Purple Tulips</h2>
      <p>Regal and luxurious — symbolizes royalty, pride, and admiration.</p>
      <p class="price">Rs. 260 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Purple Tulips">
        <input type="hidden" name="item_price" value="260">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips6.jpg');"></div>
      <h2>Orange Tulips</h2>
      <p>Vibrant and energetic — a burst of warmth and enthusiasm.</p>
      <p class="price">Rs. 250 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Orange Tulips">
        <input type="hidden" name="item_price" value="250">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips7.jpg');"></div>
      <h2>Black Tulips</h2>
      <p>Rare and mysterious — the symbol of strength and elegance.</p>
      <p class="price">Rs. 300 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Black Tulips">
        <input type="hidden" name="item_price" value="300">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips8.jpg');"></div>
      <h2>Blue Tulips</h2>
      <p>Dreamy and cool — the flower of tranquility and imagination.</p>
      <p class="price">Rs. 270 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Blue Tulips">
        <input type="hidden" name="item_price" value="270">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips9.jpg');"></div>
      <h2>Rainbow Tulips</h2>
      <p>Bright and playful — representing happiness, hope, and celebration.</p>
      <p class="price">Rs. 310 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Rainbow Tulips">
        <input type="hidden" name="item_price" value="310">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips10.jpg');"></div>
      <h2>Green Tulips</h2>
      <p>Refreshing and rare — symbolizes growth, renewal, and balance.</p>
      <p class="price">Rs. 260 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Green Tulips">
        <input type="hidden" name="item_price" value="260">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips11.jpg');"></div>
      <h2>Cream Tulips</h2>
      <p>Elegant and subtle — perfect for minimal and classy arrangements.</p>
      <p class="price">Rs. 240 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Cream Tulips">
        <input type="hidden" name="item_price" value="240">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="tulip_card">
      <div class="tulip_img" style="background-image: url('./Images_ProjectG/tulips/tulips12.jpg');"></div>
      <h2>Lilac Tulips</h2>
      <p>Gentle and lovely — conveys admiration and soft charm.</p>
      <p class="price">Rs. 250 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Lilac Tulips">
        <input type="hidden" name="item_price" value="250">
        <button type="submit" name="add_to_cart" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

  </div>

  <div class="back_btn">
    <a href="index.php">← Back to Home</a>
  </div>
</div>

<?php include "./components/footer.php"; ?>

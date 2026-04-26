<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="roses" class="container_roses">
  <div class="roses_header">
    <h1>Our Roses Collection</h1>
    <p>Each rose tells a story — from timeless romance to pure friendship, every bloom captures an emotion.</p>
  </div>

  <div class="roses_gallery">

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses1.jpg');"></div>
      <h2>Red Roses</h2>
      <p>Classic symbol of love and passion, perfect for anniversaries or heartfelt gifts.</p>
      <p class="price">Rs. 250 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Red Roses">
        <input type="hidden" name="item_price" value="250">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses3.jpg');"></div>
      <h2>White Roses</h2>
      <p>Elegant and peaceful, representing purity and new beginnings.</p>
      <p class="price">Rs. 230 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="White Roses">
        <input type="hidden" name="item_price" value="230">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses2.jpg');"></div>
      <h2>Pink Roses</h2>
      <p>Graceful and soft, perfect for expressing gratitude and admiration.</p>
      <p class="price">Rs. 240 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Pink Roses">
        <input type="hidden" name="item_price" value="240">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses5.jpg');"></div>
      <h2>Yellow Roses</h2>
      <p>Bright and joyful — the flower of friendship and cheer.</p>
      <p class="price">Rs. 220 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Yellow Roses">
        <input type="hidden" name="item_price" value="220">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses7.jpg');"></div>
      <h2>Orange Roses</h2>
      <p>Vibrant and fiery — a perfect blend of passion and enthusiasm.</p>
      <p class="price">Rs. 240 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Orange Roses">
        <input type="hidden" name="item_price" value="240">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses11.jpg');"></div>
      <h2>Lavender Roses</h2>
      <p>Rare and mesmerizing — symbolizes enchantment and first love.</p>
      <p class="price">Rs. 260 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Lavender Roses">
        <input type="hidden" name="item_price" value="260">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses8.jpg');"></div>
      <h2>Blue Roses</h2>
      <p>Mystical and unique — perfect for someone truly one of a kind.</p>
      <p class="price">Rs. 280 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Blue Roses">
        <input type="hidden" name="item_price" value="280">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses4.jpg');"></div>
      <h2>Black Roses</h2>
      <p>Bold and mysterious — a symbol of strength and rebirth.</p>
      <p class="price">Rs. 300 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Black Roses">
        <input type="hidden" name="item_price" value="300">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses10.jpg');"></div>
      <h2>Peach Roses</h2>
      <p>Soft and warm — conveys sincerity and appreciation.</p>
      <p class="price">Rs. 230 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Peach Roses">
        <input type="hidden" name="item_price" value="230">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses6.jpg');"></div>
      <h2>Green Roses</h2>
      <p>Refreshing and lively — symbolizes growth and harmony.</p>
      <p class="price">Rs. 250 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Green Roses">
        <input type="hidden" name="item_price" value="250">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses12.jpg');"></div>
      <h2>Rainbow Roses</h2>
      <p>Colorful and cheerful — the ultimate flower of happiness.</p>
      <p class="price">Rs. 300 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Rainbow Roses">
        <input type="hidden" name="item_price" value="300">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="rose_card">
      <div class="rose_img" style="background-image: url('./Images_ProjectG/roses/roses13.jpg');"></div>
      <h2>Champagne Roses</h2>
      <p>Elegant and refined — perfect for celebrating new beginnings.</p>
      <p class="price">Rs. 270 / stem</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Champagne Roses">
        <input type="hidden" name="item_price" value="270">
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

<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="lilies" class="container_lilies">
  <div class="lilies_header">
    <h1>Our Lilies Collection</h1>
    <p>Elegant, fragrant, and full of grace — our lilies add beauty and serenity to every space.</p>
  </div>

  <div class="lilies_gallery">

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies1.jpg');"></div>
      <h2>White Lily</h2>
      <p>Symbol of purity and devotion — a timeless classic for every occasion.</p>
      <p class="price">Rs. 850 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="White Lily">
        <input type="hidden" name="item_price" value="850">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies2.jpg');"></div>
      <h2>Pink Lily</h2>
      <p>Soft and graceful — representing admiration and affection.</p>
      <p class="price">Rs. 900 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Pink Lily">
        <input type="hidden" name="item_price" value="900">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies3.jpg');"></div>
      <h2>Yellow Lily</h2>
      <p>Cheerful and bright — a perfect gift for friendship and happiness.</p>
      <p class="price">Rs. 880 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Yellow Lily">
        <input type="hidden" name="item_price" value="880">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies4.jpg');"></div>
      <h2>Orange Lily</h2>
      <p>Vibrant and bold — symbolizes passion, energy, and warmth.</p>
      <p class="price">Rs. 950 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Orange Lily">
        <input type="hidden" name="item_price" value="950">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies5.jpg');"></div>
      <h2>Red Lily</h2>
      <p>Romantic and rich — the flower of deep love and desire.</p>
      <p class="price">Rs. 980 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Red Lily">
        <input type="hidden" name="item_price" value="980">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies6.jpg');"></div>
      <h2>Asiatic Lily</h2>
      <p>Bright, modern, and scent-free — adds a pop of color anywhere.</p>
      <p class="price">Rs. 1000 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Asiatic Lily">
        <input type="hidden" name="item_price" value="1000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies7.jpg');"></div>
      <h2>Stargazer Lily</h2>
      <p>Fragrant and luxurious — symbolizes prosperity and success.</p>
      <p class="price">Rs. 1100 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Stargazer Lily">
        <input type="hidden" name="item_price" value="1100">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies8.jpg');"></div>
      <h2>Calla Lily</h2>
      <p>Minimal and elegant — perfect for modern decor and weddings.</p>
      <p class="price">Rs. 1200 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Calla Lily">
        <input type="hidden" name="item_price" value="1200">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies9.jpg');"></div>
      <h2>Tiger Lily</h2>
      <p>Wild and bold — a sign of confidence and pride.</p>
      <p class="price">Rs. 950 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Tiger Lily">
        <input type="hidden" name="item_price" value="950">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies10.jpg');"></div>
      <h2>Trumpet Lily</h2>
      <p>Majestic and aromatic — known for its long petals and sweet scent.</p>
      <p class="price">Rs. 1050 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Trumpet Lily">
        <input type="hidden" name="item_price" value="1050">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies11.jpg');"></div>
      <h2>Peace Lily</h2>
      <p>Calming and pure — brings freshness to homes and workplaces.</p>
      <p class="price">Rs. 800 / plant</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Peace Lily">
        <input type="hidden" name="item_price" value="800">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="lily_card">
      <div class="lily_img" style="background-image: url('./Images_ProjectG/lilies/lilies12.jpg');"></div>
      <h2>Royal Lily</h2>
      <p>Grand and captivating — the queen of all lilies.</p>
      <p class="price">Rs. 1300 / bouquet</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Royal Lily">
        <input type="hidden" name="item_price" value="1300">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

  </div> <!-- END .lilies_gallery -->

  <div class="back_btn">
    <a href="index.php">← Back to Home</a>
  </div>
</div>

<?php
include "./components/footer.php";
?>

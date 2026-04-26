<?php
session_start();
?>
<?php
include "./components/head.php";
include "./components/header.php";
?>

<div id="corporate" class="container_corporate">

  <div class="corporate_header">
    <h1>Corporate Event Ideas</h1>
    <p>Professional yet stylish setups designed to impress — whether it's a product launch, seminar, or annual dinner.</p>
  </div>

  <div class="corporate_gallery">

    <div class="corporate_card">
      <div class="corporate_img" style="background-image: url('./Images_ProjectG/corporate/corporate1.jpg');"></div>
      <h2>Classic Executive</h2>
      <p>Elegant and formal — ideal for conferences, board meetings, and business dinners.</p>
      <p class="price">Starting from Rs. 25,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Classic Executive Setup">
        <input type="hidden" name="item_price" value="25000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="corporate_card">
      <div class="corporate_img" style="background-image: url('./Images_ProjectG/corporate/corporate2.jpg');"></div>
      <h2>Product Launch</h2>
      <p>Modern lighting and stage setups to spotlight your brand and make a lasting impression.</p>
      <p class="price">Starting from Rs. 30,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Product Launch Setup">
        <input type="hidden" name="item_price" value="30000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="corporate_card">
      <div class="corporate_img" style="background-image: url('./Images_ProjectG/corporate/corporate3.jpg');"></div>
      <h2>Gala Night</h2>
      <p>Glamorous decor with luxury finishes for award nights and formal celebrations.</p>
      <p class="price">Starting from Rs. 35,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Gala Night Setup">
        <input type="hidden" name="item_price" value="35000">
        <button type="submit" class="add_cart_btn">🛒 Add to Cart</button>
      </form>
    </div>

    <div class="corporate_card">
      <div class="corporate_img" style="background-image: url('./Images_ProjectG/corporate/corporate4.jpg');"></div>
      <h2>Outdoor Retreat</h2>
      <p>Relaxed and refreshing — perfect for team-building and casual corporate gatherings.</p>
      <p class="price">Starting from Rs. 28,000</p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="action" value="add">
         <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="item_name" value="Outdoor Retreat Setup">
        <input type="hidden" name="item_price" value="28000">
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

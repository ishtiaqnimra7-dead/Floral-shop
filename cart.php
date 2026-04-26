<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item_name"]) && isset($_POST["item_price"])) {
  $item = $_POST["item_name"];
  $price = (float) $_POST["item_price"];

  if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
  }

  $_SESSION["cart"][] = [
    "item_name" => $item,
    "price" => $price
  ];

  header("Location: cart.php");
  exit();
}
?>

<?php include "./components/head.php"; ?>
<?php include "./components/header.php"; ?>


<div class="cart_container">
  <h1>Your Cart</h1>

  <?php if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0): ?>
    <table class="cart_table">
      <tr>
        <th>Item</th>
        <th>Price (Rs.)</th>
      </tr>
      <?php
      $total = 0;
      foreach ($_SESSION["cart"] as $cartItem):
        $total += $cartItem["price"];
      ?>
        <tr>
          <td><?= htmlspecialchars($cartItem['item_name']) ?></td>
          <td><?= number_format($cartItem['price'], 0) ?></td>
        </tr>
      <?php endforeach; ?>
      <tr class="cart_total">
        <td><strong>Total</strong></td>
        <td><strong>Rs. <?= number_format($total, 0) ?></strong></td>
      </tr>
    </table>

    <div class="cart_buttons">
      <a href="index.php" class="btn light">Continue Shopping</a>
      <a href="order.php" class="btn dark">Proceed to Order</a>
    </div>
  <?php else: ?>
    <p class="empty_text">Your cart is empty.</p>
    <div class="cart_buttons">
      <a href="index.php" class="btn light">Go to Shop</a>
    </div>
  <?php endif; ?>
</div>

<?php include "./components/footer.php"; ?>

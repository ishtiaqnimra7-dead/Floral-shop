<?php
session_start();
include "database.php";
include "./components/head.php";
include "./components/header.php";
?>



<div class="order_container">
  <h1>Your Order Summary</h1>

  <?php if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0): ?>
    <table class="order_table">
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
      <tr class="order_total">
        <td><strong>Net Total</strong></td>
        <td><strong>Rs. <?= number_format($total, 0) ?></strong></td>
      </tr>
    </table>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["email"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $items = "";
      foreach ($_SESSION["cart"] as $item) {
        $items .= $item["item_name"] . " (Rs. " . $item["price"] . "), ";
      }
      $items = rtrim($items, ", ");
      $status = "Placed";
      $sql = "INSERT INTO orders (customer_name, customer_email, items, total_price, status)
              VALUES ('$name', '$email', '$items', '$total', '$status')";
      if (mysqli_query($connection, $sql)) {
        echo "<div class='success_msg'><p>Your order has been placed successfully!</p><a href='index.php' class='btn dark'>Back to Home</a></div>";
        $_SESSION['cart'] = [];
      } else {
        echo "<p class='error_msg'>Error: " . mysqli_error($connection) . "</p>";
      }
    } else {
    ?>
      <form method="POST" class="order_form">
  <input type="text" name="name" placeholder="Your Full Name" required><br>
  <input type="email" name="email" placeholder="Your Email" required><br>

  <button type="submit" class="btn dark">Confirm Order</button>
</form>

    <?php } ?>
  <?php else: ?>
    <p class="empty_text">No items in order. Please add something to your cart first.</p>
    <a href="index.php" class="btn light">Go to Shop</a>
  <?php endif; ?>
</div>

<?php include "./components/footer.php"; ?>

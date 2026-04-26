<?php
session_start();
include "database.php";
include "./components/head.php";
include "./components/header.php";


if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: admin_login.php");
  exit();
}
?>

<div class="admin_dashboard">
  <a href="logout.php" class="logout_btn">Logout</a>
  <h1>Customer Orders</h1>

  <?php
  $sql = "SELECT customer_name, customer_email, items, total_price, status FROM orders ORDER BY id DESC";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table class='orders_table'>";
    echo "<tr><th>Customer Name</th><th>Email</th><th>Items</th><th>Total (Rs.)</th><th>Status</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row['customer_name']) . "</td>";
      echo "<td>" . htmlspecialchars($row['customer_email']) . "</td>";
      echo "<td>" . htmlspecialchars($row['items']) . "</td>";
      echo "<td>" . htmlspecialchars($row['total_price']) . "</td>";
      echo "<td>" . htmlspecialchars($row['status']) . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "<p>No orders found.</p>";
  }
  ?>
</div>

<?php include "./components/footer.php"; ?>

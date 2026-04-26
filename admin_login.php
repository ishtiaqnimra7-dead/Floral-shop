<?php
session_start();
include "database.php";
include "./components/head.php";
include "./components/header.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

 
  if ($username === "Hello" && $password === "12345") {
    $_SESSION["admin_logged_in"] = true;
    header("Location: admin_dashboard.php");
    exit();
  } else {
    $error_msg = "Invalid username or password!";
  }
}
?>

<div class="admin_login_container">
  <h1>Admin Login</h1>

  <?php if (isset($error_msg)) { echo "<p class='error_msg'>$error_msg</p>"; } ?>

  <form method="POST" class="admin_login_form">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button type="submit" class="btn">Login</button>
  </form>
</div>

<?php include "./components/footer.php"; ?>

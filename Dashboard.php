<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Ini adalah halaman dashboard setelah login.</p>
    <a href="Home.php">Ke Halaman Home</a> | 
    <a href="Logout.php">Logout</a>
</body>
</html>

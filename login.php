<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `admins` WHERE `username`=\"$username\" AND `password`=\"$password\"";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res)) {
        $_SESSION["admin"] = 1;
        header("Location: admin.php");
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bomanchan</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="navbar">
    <a class="navbar-item" href="index.php">Home</a>
    <a class="navbar-item" href="passcode.php">Buy passcode</a>
    <a class="navbar-item" href="info.php">Info</a>
</div>
<div class="content">
    <form action="login.php" method="post">
        <label>abu_name</label>
        <input type="text" name="username">
        <label>passcode</label>
        <input type="password" name="password">
        <button type="submit">Login!</button>
    </form>
</div>
</body>
</html>
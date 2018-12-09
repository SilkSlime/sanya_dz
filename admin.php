<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $title = $_POST["title"];
    $text = $_POST["text"];
    if ($_POST["op"]) {
        $op = 1;
    } else $op=0;
    $query = "INSERT INTO `threads` (`op`, `session_id`, `category_id`, `title`, `text`) VALUES ($op, \"$session_id\", $category_id, \"$title\", \"$text\");";
    mysqli_query($conn, $query);
    $id=$conn->insert_id;
    header("Location: thread.php?thread_id=$id");
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
    <a class="navbar-item" href="login.php">Login</a>
    <a class="navbar-item" href="logout.php">Logout</a>
    <a class="navbar-item" href="manage.php">Manage</a>
</div>
</body>
</html>
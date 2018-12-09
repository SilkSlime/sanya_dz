<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

$category_id = $_GET["category_id"];
$category_name = $_GET["category_name"];
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
    <?php
    echo "<h1>Threads in $category_name:</h1>";
    echo "<a href=\"thread_create.php?category_id=$category_id&category_name=$category_name\">Create thread</a>";
    $query = "SELECT * FROM `threads` WHERE `category_id` = $category_id ORDER BY `id` DESC;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $thread_id = $row["id"];
        $thread_title = $row["title"];
        $thread_text = $row["text"];
        echo "
        <div onclick=\"document.location='thread.php?thread_id=$thread_id';\" class=\"thread\">
            <h3>$thread_title (#$thread_id)</h3>
            <p>$thread_text</p>
        </div>
        ";
    }
    ?>
</div>
</body>
</html>
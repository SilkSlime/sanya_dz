<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();
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
    if ($_SESSION["admin"]==1) {
        echo "
        <div class=\"category\">
            <a href=\"category_create.php\">Create new!</a>
        </div>
        ";
        $query = "SELECT * FROM `categories`;";
        $res = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($res)) {
            $category_id = $row["id"];
            $category_name = $row["name"];
            echo "
            <div class=\"category\">
                <a href=\"threads.php?category_id=$category_id&category_name=$category_name\">$category_name</a>
                <a class=\"delete\" href=\"delete.php?id=$category_id\">X</a>
            </div>
            ";
        }
    }
    ?>
</div>
</body>
</html>
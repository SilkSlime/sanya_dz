<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

$category_id = $_GET["category_id"];
$category_name = $_GET["category_name"];

if ($_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION["admin"]==1) {
    $name = $_POST["name"];
    $query = "INSERT INTO `categories` (`name`) VALUES (\"$name\");";
    mysqli_query($conn, $query);
    header("Location: manage.php");
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
    <?php
    if ($_SESSION["admin"]==1) {
        echo "<h1>Create thread in $category_name:</h1>
        <form action=\"category_create.php\" method=\"POST\">
            <label>New category...:</label>
            <input name=\"name\" type=\"text\">
            <button type=\"submit\">Create!</button>
        </form>
        ";
    }
    ?>
</div>
</body>
</html>
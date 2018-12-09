<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

$category_id = $_GET["category_id"];
$category_name = $_GET["category_name"];

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
    <?php
    echo "<h1>Create thread in $category_name:</h1>
    <form action=\"thread_create.php?category_id=$category_id\" method=\"POST\">
        <label>Title</label>
        <input name=\"title\" type=\"text\">
        <label>Text</label>
        <textarea name=\"text\"></textarea>
        <label>Show OP</label>
        <input type=\"checkbox\" name=\"op\" value=1>
        <button type=\"submit\">Create!</button>
    </form>
    ";
    ?>
</div>
</body>
</html>
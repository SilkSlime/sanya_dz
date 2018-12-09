<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

$thread_id = $_GET["thread_id"];
$query = "SELECT * FROM `threads` WHERE `id` = $thread_id;";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);

$show_op = $row["op"];
$thread_session_id = $row["session_id"];
$thread_title = $row["title"];
$thread_text = $row["text"];
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if ($show_op == 1 && $session_id==$thread_session_id) {
        $c_op = 1;
    } else {
        $c_op = 0;
    }
    $text = $_POST["text"];
    $query = "INSERT INTO `comments` (`thread_id`, `text`, `op`) VALUES ($thread_id, \"$text\", $c_op);";
    mysqli_query($conn, $query);
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
    echo "
    <div class=\"thread-detail\">
        <h1>$thread_title (#$thread_id)</h1>
        <p>
            $thread_text
        </p>
    </div>
    ";

    echo "
    <div class=\"comment-form\">
        <form action=\"thread.php?thread_id=$thread_id\" method=\"POST\">
            <input type=\"text\" name=\"text\">
            <button type=\"btn-submit\">Comment!</button>
        </form>
    </div>
    ";

    echo "<div class=\"comments\">";
    $query = "SELECT * FROM `comments` WHERE `thread_id`=$thread_id ORDER BY `id` DESC;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $c_op = "";
        if ($show_op==1 && $row['op']==1) {
            $c_op = "(OP)";
        }
        $c_id = $row["id"];
        $c_text = $row["text"];
        echo "
        <p>
        $c_id$c_op: $c_text
        </p>
        ";
    }
    echo "</div>";
    ?>

</div>
</body>
</html>
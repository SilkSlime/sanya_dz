<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();
$admin = $_SESSION["admin"];
$thread_id = $_GET["thread_id"];
if ($_SERVER["REQUEST_METHOD"]=="GET" and $admin) {
    $query = "DELETE FROM `threads` WHERE `id`=$thread_id;";
    $res = mysqli_query($conn, $query);
    if ($res) {
        header("Location: index.php");
    } else {
        echo mysqli_error($conn);
    }
}

?>
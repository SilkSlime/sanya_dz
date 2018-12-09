<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();

$id = $_GET["id"];

if ($_SESSION["admin"]==1) {
    $query = "DELETE FROM `categories` WHERE `id` = $id;";
    mysqli_query($conn, $query);
    header("Location: manage.php");
}
?>

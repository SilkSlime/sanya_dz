<?php
session_start();
if ($_SESSION["admin"]==1) {
    session_destroy();
    header("Location: index.php");
}
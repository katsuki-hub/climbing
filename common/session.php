<?php
session_start();

if(!isset($_SESSION["userID"])) {
  $topURL = "../log/top.php";
  header("Location: {$topURL}");
  exit();
}
?>
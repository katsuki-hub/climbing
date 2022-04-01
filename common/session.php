<?php
session_start();

if(!isset($_SESSION["userID"])) {
  $topURL = "https://climber2022.site/log/top.php";
  header("Location: {$topURL}");
  exit();
}
?>
<?php
session_destroy();
session_start();

$cart = [];
$cart[1] = ["Can of Beans", 0];
$cart[2] = ["Time Machine", 0];
$cart[3] = ["Left Headlight", 0];
$cart[4] = ["Nine Dollars", 0];

$_SESSION["cart"] = $cart;

header("Location: browse.php");
?>
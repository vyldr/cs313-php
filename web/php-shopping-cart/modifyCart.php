<?php

session_start();

$item = $_GET["item"];

if ($_GET["action"] == "add")
    $_SESSION["cart"][$item][1]++;

if ($_GET["action"] == "remove")
    $_SESSION["cart"][$item][1] = 0;

?>
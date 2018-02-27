<?php

session_start();

$input = $_GET["input"];
$name = $_GET["name"];

$user = $_SESSION["user"];

// Use the database
require("dbConnect.php");
$db = get_db();

// Insert the data
$query = "UPDATE robots SET robot_input = '$input' WHERE robot_name = '$name'";
$statement = $db->prepare($query);
//$statement->bindValue(':input', $input);
$statement->execute();

?>
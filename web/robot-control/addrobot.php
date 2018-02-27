<?php

session_start();

// Are we not signed in?
if (!isset($_SESSION["user"])) {
    header("Location: .");
    die();
}

$user = $_SESSION["user"];
$name = htmlspecialchars($_POST['name']);

// Use the database
require("dbConnect.php");
$db = get_db();

// Insert the data
$query = 'INSERT INTO robots(robot_name, robot_input, robot_output) VALUES(:name, :input, :output)';
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':input', "");
$statement->bindValue(':output', "");
$statement->execute();

// Insert to the lookup table
$query = 'INSERT INTO lookup(user_name, robot_name) VALUES(:user, :robot)';
$statement = $db->prepare($query);
$statement->bindValue(':user', $user);
$statement->bindValue(':robot', $name);
$statement->execute();

// Redirect to the manage page
header("Location: manage.php");
die(); 

?>
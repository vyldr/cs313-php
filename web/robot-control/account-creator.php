<?php

// Get the variables
$user = $_POST['user'];
$pass = $_POST['pass'];

// Prepare the data
$user = htmlspecialchars($user);
$pass = password_hash($pass, PASSWORD_DEFAULT);

// Use the database
require("dbConnect.php");
$db = get_db();

// Insert the data
$query = 'INSERT INTO users(user_name, password_hash) VALUES(:user, :pass)';
$statement = $db->prepare($query);
$statement->bindValue(':user', $user);
$statement->bindValue(':pass', $pass);
$statement->execute();

// Redirect to the sign in page
header("Location: .");
die();

?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$user = htmlspecialchars($user);
$pass = password_hash($pass, PASSWORD_DEFAULT);

require("dbConnect.php");

$db = get_db();

$query = 'INSERT INTO users(user_name, password_hash) VALUES(:user, :pass)';
$statement = $db->prepare($query);
$statement->bindValue(':user', $user);

$statement->bindValue(':pass', $pass);
$statement->execute();

header("Location: .");
die();

?>
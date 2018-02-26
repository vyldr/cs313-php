<?php

session_start();

if (isset($_SESSION["user"])) {
    header("Location: manage.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<body>
    <h1>Sign In</h1>
    <div id="maincontent">
        <form action="signIn.php" method="post">
            <input type="text" name="user" placeholder="Username"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <button type="submit">Sign In</button>
        </form>
        <a href="create.php">Create an account</a>
    </div>
</body>
</html>
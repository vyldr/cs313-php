<?php

session_start();

if (isset($_POST['user']) && isset($_POST['pass']))
{
    // they have submitted a username and password for us to check
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Connect to the DB
    require("dbConnect.php");
    $db = get_db();

    $query = 'SELECT password_hash FROM users WHERE user_name=:user';
    $statement = $db->prepare($query);
    $statement->bindValue(':user', $user);
    $result = $statement->execute();

    if ($result)
    {
        $row = $statement->fetch();
        $hashedPasswordFromDB = $row['password_hash'];
        // now check to see if the hashed password matches
        if (password_verify($pass, $hashedPasswordFromDB))
        {
            // password was correct, put the user on the session, redirect to home
            $_SESSION['user'] = $user;
            header("Location: manage.php");
            die(); // we always include a die after redirects.
        }
    }
}


?>

You signed in wrong
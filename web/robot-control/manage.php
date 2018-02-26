<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manage</title>
</head>
<body>
    <h1>Manage your Robots<a href="signOut.php"><?php echo $_SESSION["user"]; ?> Sign Out</a></h1>
    <div id="managearea">
        <button>Add one</button>
        <table>
            <tr>
                <th>Name</th>
                <th>Start</th>
                <th>Remove</th>
            </tr>
            <?php // Insert the list of current robots from the database
            echo "<tr><td>There is nothing here</td></tr>"
            ?>
        </table>
    </div>
</body>
</html>
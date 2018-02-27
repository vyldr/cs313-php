<?php

session_start();

// Are we not signed in?
if (!isset($_SESSION["user"])) {
    header("Location: .");
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="manager.js" defer></script>
    <title>Manage</title>
</head>
<body>
    <h1>Manage your Robots<a href="signOut.php"><?php echo $_SESSION["user"]; ?> - Sign Out</a></h1>
    <div id="managearea">
        <button onclick="addOne();" id="addone">Add one</button>
        <form action="addrobot.php" method="post" id="addform" style="display:none;">
            <input type="text" name="name" id="name" placeholder="Robot name" required>
            <button type="submit">Add</button>
        </form>
        <table>
            <tr>
                <th>Name</th>
                <th>Start</th>
            </tr>
            <?php // Insert the list of current robots from the database

                // Use the database
                require("dbConnect.php");
                $db = get_db();

                // Prepare the statement
                $user = $_SESSION["user"];
                $query = "SELECT robot_name FROM lookup WHERE user_name = '$user'";
                $statement = $db->prepare($query);
                $statement->execute();

                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr><td>" . $row["robot_name"] . "</td><td><a href='control.php?robot=" . $row["robot_name"] . "'>Start</a></td></tr>";
                }

            ?>
        </table>
    </div>
</body>
</html>
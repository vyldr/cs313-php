<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Confirm</title>
</head>
<body>
    <h1>Confirm</h1>
    <div id="confirm">
    <p>Items:</p>
    <?php
        $i = 1;
        foreach ($_SESSION["cart"] as $item)
        {
            if ($item[1])
                echo "<p>$item[1] x $item[0]</p>";
            $i++;
        }
    ?>
    <br>
    <p>Transporting items to:</p><p>
    <?php
        echo htmlspecialchars($_POST["name"]) . "<br>" . htmlspecialchars($_POST["address"]) . "<br>" . htmlspecialchars($_POST["city"] . ", " . $_POST["state"]);
        session_destroy();
    ?>
    </div>
</body>
</html>

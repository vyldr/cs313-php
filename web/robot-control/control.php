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
    <script src="control.js" defer></script>
    <script>
        var name = '<?php echo $_GET["robot"]; ?>' ;
    </script>
    <title>Control</title>
</head>
<body>
    <h1>
        Use the arrow keys to control the robot
    </h1>
    <div id="content">
        <a href='#' target="_blank" 
        onclick="window.open('simulator.php?robot=<?php echo $_GET["robot"]; 
        ?>', 'newwindow', 'width=400,height=300'); return false;">
            Launch the simulator
        </a>
        <br>
        <a href="signOut.php">
            <?php echo $_SESSION["user"]; ?> - Sign Out
        </a>
    </div>

</body>
</html>
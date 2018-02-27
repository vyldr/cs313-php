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

</body>
</html>
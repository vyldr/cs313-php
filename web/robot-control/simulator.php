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
    <title>Simulator</title>
    <link rel="stylesheet" href="style.css">
    <script src="simulator.js" defer></script>
    <script>
        var robotName = "<?php echo $_GET["robot"]; ?>" ;
    </script>
</head>
<body onresize="resize()">
    <canvas id="canvas"></canvas>

</body>
</html>
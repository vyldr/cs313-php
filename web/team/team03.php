<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Name: <?php echo $_POST["name"]; ?><br>
    Email: <a href="mailto:<?php echo $_POST["email"]  ?>"><?php echo $_POST["email"]  ?></a><br>
    Major: <?php echo $_POST["major"]; ?><br>
    Comments: <?php echo $_POST["comments"]; ?><br>

    <?php
        foreach ($_POST["continents"] as $continent)
        {
            echo "You visited $continent<br>";
        }
    ?>
</body>
</html>


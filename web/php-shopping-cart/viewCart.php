<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="shoppingCart.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>View Cart</title>
</head>
<body>
    <h1>View Cart</h1>
    <table id="content">
        <tbody>
            
            <?php
                $i = 1;
                foreach ($_SESSION["cart"] as $item)
                {
                    if ($item[1])
                        echo "<tr id=\"$i\"><td>$item[0]</td><td>Quantity: $item[1]
                        </td><td><button onclick=\"removeItem($i)\">Remove All</button></td></tr>";
                    $i++;
                }
            ?>
            <tr>
                <td>
                    <a href="browse.php"><button>Browse Items</button></a>
                </td>
                <td>
                    <a href="checkout.php"><button>Checkout</button></a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
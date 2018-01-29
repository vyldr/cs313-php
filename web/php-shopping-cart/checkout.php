<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form action="confirm.php" method="post">
        <table id="content">
            <tbody>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" id="" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text" name="address" id="" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        City:
                    </td>
                    <td>
                        <input type="text" name="city" id="" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        State:
                    </td>
                    <td>
                        <input type="text" name="state" id="" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="history.back();">Return to cart</button>
                    </td>
                    <td>
                        <button type="submit">Complete purchase</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
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
    <title>Browse Items</title>
</head>
<body>
    <h1>Browse Items</h1>
    <table id="content">
        <tbody>
          <tr>
            <td>Can of Beans: $1.23</td>
            <td>
              <button id="b1" onclick="addItem(1)" type="button">Add to cart</button>
            </td>
          </tr>
          <tr>
            <td>Time Machine: $19.99</td>
            <td>
              <button id="b2" onclick="addItem(2)" type="button">Add to cart</button>
            </td>
          </tr>
          <tr>
            <td>Left Headlight: $12.65</td>
            <td>
              <button id="b3" onclick="addItem(3)" type="button">Add to cart</button>
            </td>
          </tr>
          <tr>
            <td>Nine Dollars: $10.00</td>
            <td>
              <button id="b4" onclick="addItem(4)" type="button">Add to cart</button>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href="viewCart.php">
                <button>View Cart</button>
              </a>              
            </td>
          </tr>
        </tbody>
      </table>
</body>
</html>
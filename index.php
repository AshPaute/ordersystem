<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css"></link>

</head>
<body>

<h2>Menu</h2>

<table>
    <tr>
        <th>Order</th>
        <th>Amount</th>

    </tr>
    <tr>
        <td>Burger</td>
        <td>50</td>
    </tr>     

    <tr>
        <td>Fries</td>
        <td>75</td>
    </tr>
    <tr>
        <td>Steak</td>
        <td>150</td>
    </tr>

</table>
<p> </p>
<form method="post" action="handleForm.php">
    <label for="order">Select an order</label>
    <select id="order" name="order">
        <option value="burger">Burger</option>
        <option value="fries">Fries</option>
        <option value="steak">Steak</option>
    </select><br><br>
    
    <label for="quantity">Quantity </label>
    <input type="number" id="quantity" name="quantity" min="1" required><br><br>
    
    <label for="cash">Cash </label>
    <input type="number" id="cash" name="cash" min="1" required><br><br>
    
    <input type="submit" name="submit" value="Submit">
    <br><br>
</form>

</body>
</html>
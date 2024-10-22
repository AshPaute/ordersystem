<?php
session_start();
echo "<link rel='stylesheet' href='style1.css' type='text/css'>";
if (isset($_POST['submit'])) {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $menu = array(
        "burger" => 50,
        "fries" => 75,
        "steak" => 150,
    );

    $total_cost = $menu[$order] * $quantity;
    $change = $cash - $total_cost;

    if ($cash < $total_cost) {
        echo "<table class='table1'><tr><th><h2>Sorry, balance not enough.</h2></tr></th></table>";
    } else {
        date_default_timezone_set('Asia/Manila');
        echo "<table class='table2'>";
        echo "<tr><th class='th1'>RECEIPT</th></tr>";
        echo "<tr><td>Total: ₱$total_cost</td></tr>";
        echo "<tr><td>You Paid: ₱$cash</td></tr>";
        echo "<tr><td>Change: ₱$change</td></tr>";
        echo "<tr><td>" . $date = date('m/d/Y h:i:s a', time()) . "</td></tr>";
        echo "</table>";
        
    }
}
?>

<p><button onclick="backHome()">Back</button></p>

<script>
    function backHome() {
        window.location.href = 'index.php';
    }
</script>
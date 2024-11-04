<?php
session_start();
include('includes/function.php');
$obj = new Operations;


// Get the product ID, quantity, and unit from the URL parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;
$qty = isset($_GET['qty']) ? (int)$_GET['qty'] : 1;
$unit = isset($_GET['unit']) ? $_GET['unit'] : '';


// Save data in the cartItem
$table = "cart_items";

$bookdata = [
    'user_id' => $_SESSION['id'],
    'product_id' => $id,
    'qty' => $qty,
    'units' => $unit,
];

$book = $obj->insert($table, $bookdata);

// Redirect to the cart or previous page
header("Location: cart.php"); // Adjust as necessary
exit;

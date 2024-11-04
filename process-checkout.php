<?php
session_start();
include('includes/function.php');
$obj = new Operations;

// Check if the user is logged in and cart is not empty
if (!isset($_SESSION['id']) || empty($_POST)) {
    header("Location: login.php");
    exit;
}


// Capture form data
$userId = $_SESSION['id'];
$address = $_POST['address'];
$paymentMethod = $_POST['paymentMethod'];
$notes = $_POST['notes'];
$totalAmount = floatval(str_replace('Rs. ', '', $_POST['total_amt']));

// Initialize an array for selected product IDs
$selectedProducts = $_POST['pid'];



// If no products were selected, redirect back to the cart page
if (empty($selectedProducts)) {
    header("Location: cart.php");
    exit;
}


if ($selectedProducts) {

    $orderID = rand(1000, 9999); // Placeholder for order ID generation


    $ptable = "product_order";
    $book = "bookings";

    $bookdata = [
        'order_id' => $orderID,
        'user_id' => $_SESSION['id'],
        'amount' => $totalAmount,
        'pay_mode' => $paymentMethod,
        'ship_add' => $address,
        'notes' => $notes,
        'created_at' => $date_added
    ];

    //$book = $obj->insert($book, $bookdata);
    // print_r($book);
    // exit;
    $bookData = $obj->getLatest($book);

    $bookingID = $bookData['id'];


    foreach ($selectedProducts as $pitem) {
        $pdata = $obj->getSingle('products', 'id = ' . $pitem[0]);


        $qtydata = $obj->getAllData('cart_items', 'product_id = ' . $pitem[0]);
        $cartID = $qtydata[0]['id'];

        $pqty = $qtydata[0]['qty'];
        $punit = $qtydata[0]['units'];
        $pdataprice = $pdata['sale_price'];


        $porderdata = [
            'pid' => $pitem[0],
            'bid' => $bookingID,
            'user_id' => $_SESSION['id'],
            'qty' => $pqty,
            'unit' => $punit,
            'amt' => $pdataprice,
        ];
        // print_r($porderdata);
        // exit;

        $porder = $obj->insert($ptable, $porderdata);

        $deletCart = $obj->delete('cart_items', $cartID);
    }




    unset($_SESSION['cart']);
    // Redirect to an order confirmation page
    header("Location: order-confirmation.php?orderID=" . $orderID);
    exit;
} // Clear cart after processing order
echo "<script>
        alert('Booking Failed !');
        window.location.href='cart.php';
        </script>";

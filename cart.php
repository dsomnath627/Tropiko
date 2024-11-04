<?php
session_start();
include('includes/function.php');
$obj = new Operations;

if (!empty($_SESSION['id'])) {
    $table = 'cart_items';
    $cartList = $obj->getAll($table);
}




// print_r($cartList);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        /* Fade-in animation */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hover animation for table rows */
        .table-hover tbody tr:hover {
            background-color: #f0f8ff;
            transform: scale(1.02);
            transition: all 0.2s ease-in-out;
        }

        /* Button animation */
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>

</head>

<body>
    <header class="header_section">
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="" /><span>
                                Tropiko
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fruit.php"> Fruits</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="service.php"> Services </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cart.php">Cart</a>
                                    </li>
                                    <?php
                                    if (!empty(isset($_SESSION['id']))) {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="my-bookings.php">Orders</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact us</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                                </form>
                            </div>
                            <?php

                            if (!empty(isset($_SESSION['id']))) {
                            ?>
                                <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                                    <a href="logout.php" class="btn btn-danger">
                                        Log out
                                    </a>
                                </div>
                            <?php
                            } else {
                            ?>

                                <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                                    <a href="login.php" class="btn btn-primary">
                                        Log in
                                    </a>
                                </div>
                            <?php

                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </header>
            <?php
            if (!empty($_SESSION['id'])) {
            ?>
                <form action="process-checkout.php" method="POST">
                    <div class="container fade-in">
                        <div class="row">
                            <!-- Cart List Section -->
                            <div class="col-md-7 fade-in">
                                <h1 class="mb-4">Cart List</h1>
                                <div style="height: 400px; overflow-y: auto;"> <!-- Add this wrapper for scrolling -->
                                    <table class="table table-responsive table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>##</th>
                                                <th width="300px">Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $totalAmount = 0; // Initialize total amount variable

                                            foreach ($cartList as $item) {
                                                $productCondition = 'id = ' . $item['product_id'];
                                                $product = $obj->getSingle('products', $productCondition);

                                                if ($_SESSION['id'] == $item['user_id']) {
                                                    $qty = $item['qty'];
                                                    $unit = $item['units'];
                                                    $price = $product['sale_price'];

                                                    if ($unit == 'kg') {
                                                        $itemTotal = $price * $qty;
                                                    } else {
                                                        $gm = $qty / 100;
                                                        $itemTotal = $price * $gm;
                                                    }

                                                    $totalAmount += $itemTotal; // Add item total to total amount
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="product-checkbox" name="pid[]" value="<?= $item['product_id'] ?>" data-price="<?= $itemTotal ?>">
                                                        </td>
                                                        <td>
                                                            <img src="admin/<?= htmlspecialchars($product['image']) ?>" alt="" width="80" height="80" class="img-thumbnail">
                                                            <p class="mt-2"><?= htmlspecialchars($product['name']) ?></p>
                                                        </td>
                                                        <td><?= htmlspecialchars($item['qty']) . ' ' . htmlspecialchars($item['units']); ?></td>
                                                        <td>Rs. <?= number_format($itemTotal, 2) ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- End of scrollable wrapper -->
                            </div>


                            <!-- Checkout Section -->
                            <div class="col-md-5 fade-in">
                                <div class="checkout-section p-4 border rounded bg-light">
                                    <h3 class="mb-4">Checkout</h3>
                                    <div class="form-group">
                                        <label for="address">Shipping Address:</label>
                                        <input type="text" name="address" id="address" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_amt">Total Amount:</label>
                                        <input type="text" name="total_amt" id="total_amt" class="form-control" value="<?= number_format($totalAmount, 2) ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label for="paymentMethod">Payment Method:</label>
                                        <select name="paymentMethod" id="paymentMethod" class="form-control" required>
                                            <option value="credit_card">Credit Card</option>
                                            <option value="paypal">PayPal</option>
                                            <option value="cash_on_delivery">Cash on Delivery</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="notes">Additional Notes:</label>
                                        <textarea name="notes" id="notes" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 mt-3">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>




            <?php
            } else {
            ?>
                <div class="container">
                    <a href="#" onclick="promptLogin()">Please Login First!</a>
                </div>

                

                <script>
                    function promptLogin() {
                        let userResponse = prompt("Please log in first. Type 'yes' if you have an account, or 'no' to register.");
                        if (userResponse && userResponse.toLowerCase() === 'yes') {
                            window.location.href = "login.php";
                        } else {
                            alert("Please register first.");
                            window.location.href = "login.php";
                            // Optionally, redirect to a registration page
                            // window.location.href = "register.php";
                        }
                    }
                </script>
            <?php
            }
            ?>

            <script>
                // JavaScript to calculate the total based on selected checkboxes
                document.addEventListener('DOMContentLoaded', function() {
                    const checkboxes = document.querySelectorAll('.product-checkbox');
                    const totalAmountInput = document.getElementById('total_amt');

                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', updateTotalAmount);
                    });

                    function updateTotalAmount() {
                        let total = 0;

                        checkboxes.forEach(checkbox => {
                            if (checkbox.checked) {
                                total += parseFloat(checkbox.getAttribute('data-price'));
                            }
                        });

                        totalAmountInput.value = 'Rs. ' + total.toFixed(2);
                    }
                });
            </script>
</body>

</html>
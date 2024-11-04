<?php
session_start();
include('includes/function.php');
$obj = new Operations;

// Check if user is logged in and retrieve the booking list
if (!empty($_SESSION['id'])) {
    $table = 'bookings';
    $userId = $_SESSION['id'];
    $booklist = $obj->getAllData($table, "user_id = " . $userId);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .table-hover tbody tr:hover {
            background-color: #f0f8ff;
            transform: scale(1.02);
            transition: all 0.2s ease-in-out;
        }
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .table-responsive {
            height: 400px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <header class="header_section">
        <div class="hero_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="" /><span>Tropiko</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="fruit.php">Fruits</a></li>
                                <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                                <li class="nav-item"><a class="nav-link" href="my-bookings.php">Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                        <?php if (!empty($_SESSION['id'])) { ?>
                            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                                <a href="logout.php" class="btn btn-danger">Log out</a>
                            </div>
                        <?php } else { ?>
                            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                                <a href="login.php" class="btn btn-primary">Log in</a>
                            </div>
                        <?php } ?>
                    </div>
                </nav>
            </div>
            
            <div class="container fade-in">
                <h1 class="mb-4">My Orders</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Order ID</th>
                                <th>Amount</th>
                                <th>Payment Mode</th>
                                <th>Shipping Address</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Order Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($booklist)) {
                                foreach ($booklist as $item) {
                                    ?>
                                    <tr>
                                        <td><?= htmlspecialchars($item['order_id']); ?></td>
                                        <td>Rs. <?= number_format($item['amount'], 2); ?></td>
                                        <td><?= htmlspecialchars($item['pay_mode']); ?></td>
                                        <td><?= htmlspecialchars($item['ship_add']); ?></td>
                                        <td><?= htmlspecialchars($item['notes']); ?></td>
                                        <td><?= htmlspecialchars($item['status']); ?></td>
                                        <td><?= htmlspecialchars($item['created_at']); ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No orders found.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

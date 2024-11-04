<?php
$orderID = $_GET['orderID'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <!-- Slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    
    <!-- Responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    
    <!-- Additional CSS for enhanced styling -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light background for contrast */
            color: #333; /* Dark text for readability */
        }
        
        .container {
            margin-top: 50px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            background-color: #ffffff; /* White background for the container */
            padding: 30px; /* Padding around the content */
            animation: fadeIn 0.5s; /* Fade-in animation for the container */
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .alert {
            font-size: 1.2rem; /* Increase font size for alerts */
            border-radius: 8px; /* Rounded corners for alerts */
            opacity: 0; /* Start hidden for animation */
            animation: fadeIn 0.5s forwards; /* Fade-in animation for alerts */
            animation-delay: 0.3s; /* Delay for alert animation */
        }

        .btn-info {
            background-color: #17a2b8; /* Bootstrap primary color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Padding for buttons */
            border-radius: 5px; /* Rounded button corners */
            transition: background-color 0.3s; /* Transition for hover effect */
            animation: bounce 0.5s infinite alternate; /* Bounce animation */
        }

        /* Bounce animation */
        @keyframes bounce {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-10px);
            }
        }

        .btn-info:hover {
            background-color: #138496; /* Darker shade on hover */
        }

        .text-center {
            margin-top: 20px; /* Space above the continue shopping button */
        }

        h2 {
            margin-bottom: 20px; /* Space below the heading */
            color: #007bff; /* Primary color for heading */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Order Confirmation</h2>
        <div class="col-lg-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>Your order has been booked successfully!</p>
                <strong>Order ID: <?= isset($orderID) ? $orderID : 'N/A'; ?></strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div class="text-center">
            <a href="fruit.php" class="btn btn-info">Continue Shopping!</a>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzLEzNeK3UMLZH81/6JoCkPf1DfuWlM6JqlRIOSMV9Tw" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93MvZP6T0F5rj5Yg5PTJ2dC7Dhh6mI7JTo6D7QQ1Rjz7yfwW8tftHld2sEn0wC" crossorigin="anonymous"></script>
</body>

</html>

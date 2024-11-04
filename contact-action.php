<?php
session_start();
include('includes/function.php');
$operations = new Operations();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

   
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($phone)) {
        $errors[] = "Phone Number is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid Email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'message' => $message,
            'date_added' => date("Y-m-d H:i:s")
        ];

        
        $insertId = $operations->insert('contacts', $data);

        if ($insertId) {
          
            echo "<script>
                alert('Thank you for reaching out! We\'ll get back to you soon.');
                window.location.href = 'index.php'; // Redirect to the index page
            </script>";
        } else {
            
            echo "<script>
                alert('Sorry, something went wrong. Please try again later.');
                window.location.href = 'index.php'; // Redirect to the index page
            </script>";
        }
    } else {
        
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

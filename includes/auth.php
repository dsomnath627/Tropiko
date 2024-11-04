<?php
if (!empty($_SESSION['id'])) {
    session_start();
    header('location:index.php');
}else {
    header('location:index.php');
}
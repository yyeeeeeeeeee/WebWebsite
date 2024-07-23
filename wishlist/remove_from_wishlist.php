<?php
session_start();
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wishlist_id'])) {
    // Get the wishlist ID from the form
    $wishlist_id = $_POST['wishlist_id'];

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to the login page if the user is not logged in
        header("Location: ../login/index.php");
        exit();
    }

    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Delete the item from the wishlist
    $sql = "DELETE FROM wishlist WHERE wishlist_id = '$wishlist_id' AND user_id = '$user_id'";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the wishlist page
        header("Location: index.php");
        exit();
    } else {
        // Handle error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Redirect to the wishlist page if the request method is not POST or wishlist_id is not set
    header("Location: index.php");
    exit();
}
?>

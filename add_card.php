<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $name = htmlspecialchars($_POST['name']);

    // File upload handling if needed
    $image_url = ''; // Placeholder for now

    // Here, you can perform any additional processing or validation of form data

    // Display success message
    echo "Card added successfully.";
} else {
    // If the request method is not POST, display an error message
    echo "Error: Form submission method must be POST.";
}
?>
    
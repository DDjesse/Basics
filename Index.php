<nav style="text-align: center;">
    <?php include 'components/navbar.php'; ?>
</nav>


 <!DOCTYPE html>
<html lang="en">
                    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>





<body>
    <header>
     
    </header>
    <main class="container mt-4">
    <h2>Kies je keuze</h2>
    <?php
// Connect to your database
// Example: $db = new mysqli('localhost', 'username', 'password', 'database_name');

// Query to retrieve card information from the database
$query = "SELECT * FROM cards";
$result = $db->query($query);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Loop through each row and output card HTML
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card-container">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '" class="svg-image">';
        echo '<p>' . $row['name'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No cards found.";
}

// Close database connection
$db->close();
?>

</main>





<footer>
    <?php include 'components/footer.php'; ?>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


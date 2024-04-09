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
    <style>
        /* Custom CSS for reducing horizontal space between cards */
        .card-container {
            margin-bottom: 20px; /* Adjust the margin bottom to reduce space between cards */
        }
        .card {
            margin-right: 10px; /* Adjust the margin right to reduce space between cards */
            margin-left: 10px; /* Adjust the margin left to reduce space between cards */
        }
    </style>
    <?php
    // Include the database connection file
    include 'db_connect.php';

    // Query to retrieve card information from the database
    $query = "SELECT * FROM cards";
    $result = $conn->query($query);

    // Check if there are any rows in the result
    if ($result->num_rows > 0) {
        // Open a Bootstrap row
        echo '<div class="row">';

        // Loop through each row and output card HTML
        while ($row = $result->fetch_assoc()) {
            // Start a Bootstrap column
            echo '<div class="col-md-4">'; // Each card takes up half the width on medium screens
            echo '<div class="card-container">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="' . $row['name'] . '" class="svg-image">';
            echo '<p>' . $row['name'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; // Close the Bootstrap column
        }

        // Close the Bootstrap row
        echo '</div>';
    } else {
        echo "No cards found.";
    }

    // Close database connection
    $conn->close();
    ?>

</main>






<footer>
    <?php include 'components/footer.php'; ?>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


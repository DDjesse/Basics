<?php
// Include the database connection file
include 'db_connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if image file is uploaded
    if (isset($_FILES["imageUpload"]) && $_FILES["imageUpload"]["error"] == 0) {
        // Prepare and bind parameters
        $stmt = $conn->prepare("INSERT INTO cards (name, image) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $image);

        // Get form data
        $name = $_POST["name"];
        $image = file_get_contents($_FILES["imageUpload"]["tmp_name"]);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "New record created successfully.";
            // Redirect to prevent form resubmission
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
}
?>

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
    <link rel="stylesheet" href="css/Adminpaneel.css">
    
    <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.src = reader.result;
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
</head>

<body>
    <header>
        <h1>Voeg kaarten toe</h1>
    </header>

    <main class="container mt-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imageUpload" class="image-upload">
                    <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" onchange="previewImage(event)">
                    <div class="upload-icon">+</div>
                </label>
                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100px; max-height: 100px;">
            </div>
            <div class="form-group">
                <label for="nameInput">Name:</label>
                <input type="text" class="form-control" id="nameInput" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

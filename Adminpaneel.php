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
</head>





<body>
    <header>
     <h1>Voeg kaarten toe</h1>
    </header>
    <main class="container mt-4">
    <form>
        <div class="form-group">
            <label for="imageUpload" class="image-upload">
                <input type="file" class="form-control-file" id="imageUpload">
                <div class="upload-icon">+</div>
            </label>
        </div>
        <div class="form-group">
            <label for="nameInput">Name:</label>
            <input type="text" class="form-control" id="nameInput">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Edit button -->
        <button type="button" class="btn btn-info" id="editButton">Edit</button>
        <!-- Delete button -->
        <button type="button" class="btn btn-danger" id="deleteButton">Delete</button>
    </form>
</main>






<footer>
    <?php include 'components/footer.php'; ?>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


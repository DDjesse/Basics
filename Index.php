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
    <div class="card-container">
        <a href="#" class="clickable-card" onclick="showFoodContent()">
            <div class="card">
                <div class="card-body">
                    <img src="assets/food_image.svg" alt="Food Image" class="svg-image">
                </div>
            </div>
        </a>
        <a href="#" class="clickable-card" onclick="showBodyContent()">
            <div class="card">
                <div class="card-body">
                    <img src="assets/body_image.svg" alt="Body Image" class="svg-image">
                </div>
            </div>
        </a>
    </div>
    <div class="card-container">
        <a href="#" class="clickable-card" onclick="showMindContent()">
            <div class="card">
                <div class="card-body">
                    <img src="assets/mind_image.svg" alt="Mind Image" class="svg-image">
                </div>
            </div>
        </a>
        <a href="#" class="clickable-card" onclick="showExerciseContent()">
            <div class="card">
                <div class="card-body">
                    <img src="assets/exercise_image.svg" alt="Exercise Image" class="svg-image">
                </div>
            </div>
        </a>
    </div>
</main>





<footer>
    <?php include 'components/footer.php'; ?>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel & Resort</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

 
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Hammam Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li> 
                <li class="nav-item"><a class="nav-link" href="price.php">Bookings</a></li>
                <li class="nav-item"><a class="nav-link" href="pics/contacts.png" target="_blank">Contact Us</a></li>
            </ul>
        </div>
    </nav>


    <div id="hotelCarousel" class="carousel slide mt-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-75 mx-auto" src="pics/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-75 mx-auto" src="pics/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-75 mx-auto" src="pics/slide3.jpg" alt="Third slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#hotelCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hotelCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>


    <footer class="text-light text-center py-2">
        <div class="container">
            <p>If you have any questions, feel free to reach out to us!</p>
            <p>Phone: +62 8805204080</p>
            <p>&copy; 2024 Hammam Hotel Services</p>
            <p><a href="index.php" class="text-light">Logout</a></p>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            $('#hotelCarousel').carousel({
                interval: 3000
            });
        });
    </script>

</body>

</html>

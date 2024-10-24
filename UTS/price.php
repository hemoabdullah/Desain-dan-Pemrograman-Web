<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Price</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="price.css"> 
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Hammam Hotel</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="price.php">Bookings</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 animated fadeIn"> 
        <h2>Check Your Booking Price</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="roomType">Room Type</label>
                <select class="form-control" id="roomType" name="roomType" required>
                    <option value="">Select Room Type</option> 
                    <option value="500">Standard - 500</option>
                    <option value="600">Superior - 600</option>
                    <option value="700">Deluxe - 700</option>
                </select>
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" class="form-control" id="floor" name="floor" min="1" required>
            </div>
            <div class="form-group">
                <label for="days">Length of Stay (Days)</label>
                <input type="number" class="form-control" id="days" name="days" min="1" required>
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <select class="form-control" id="discount" name="discount">
                    <option value="none">None</option>
                    <option value="member">Member - 10% Off</option>
                    <option value="birthday">Birthday Promo - $50 Off</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Check</button>
        </form>


        <?php
        session_start(); 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            if (!empty($_POST['roomType'])) {
                $roomPrice = $_POST['roomType'];
                $floor = $_POST['floor'];
                $days = $_POST['days'];
                $discount = $_POST['discount'];

                $rentalPrice = $roomPrice * $days;

                if ($floor > 5) {
                    $rentalPrice += 1000; 
                }

        
                if ($discount == 'member') {
                    $rentalPrice *= 0.90; 
                } elseif ($discount == 'birthday') {
                    $rentalPrice -= 50; 
                }

    
                if ($rentalPrice < 0) {
                    $rentalPrice = 0;
                }
                $_SESSION['totalPrice'] = $rentalPrice;

                header('Location: price.php');
                exit(); 
            } else {
                echo "<div class='alert alert-danger mt-4'>Please select a room type.</div>";
            }
        }

        if (isset($_SESSION['totalPrice'])) {
            echo "<div class='alert alert-success mt-4'>Total Price: $ " . number_format($_SESSION['totalPrice'], 0, ',', '.') . "</div>";
            unset($_SESSION['totalPrice']);
        }
        ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.querySelector('.container');
            container.classList.add('fadeIn');
        });
    </script>
</body>
</html>

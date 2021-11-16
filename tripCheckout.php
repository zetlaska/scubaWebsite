<?php 
include('db/server.php');
include('header/navUser.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: home.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/form.css" />
        <title>Trip Checkout - Megladon</title>
    </head>
    <body>
    <div class="mx-auto mt-5 mb-2 bg-white text-black p-5 pb-2" style=" height:fit-content; width:600px; border-radius: .30rem">
            <form action="tripCheckout.php" method="POST">
                <h5 class="text-center mb-4">Trip Checkout Page</h1>
                <?php
                $id = isset($_GET['id']) ? $_GET['id'] : '';
                $tripDetails = $mysqli->query("SELECT * FROM trip WHERE id='$id'") or die(mysqli_error($mysqli));
                while ($row = $tripDetails->fetch_assoc()): ?>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input class="form-control" type="text" name="location" value="<?php echo $row['location']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price (RM)</label>
                    <input class="form-control" type="text" name="price" value="<?php echo $row['price']; ?>" readonly>
                </div>
                <?php endwhile; ?>
                <div class="mb-3">
                    <label class="form-label" for="bookingDate">Booking Date</label>
                    <input type="date" class="form-control" id="bookingDate" name="bookingDate">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pax</label>
                    <select class="form-select mb-3" aria-label="pax" name="pax">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $_SESSION['username']; ?>"readonly>
                </div>
                <?php
                $username = $_SESSION['username'];
                $userDetails = $mysqli->query("SELECT * FROM user WHERE username='$username'") or die(mysqli_error($mysqli));
                while ($row = $userDetails->fetch_assoc()): ?>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input class="form-control"type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="youremail@example.com" readonly>
                </div>  
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input class="form-control"type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="John Smith">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact No.</label>
                    <input class="form-control"type="text" name="contact" value="<?php echo $row['contactNo']; ?>" placeholder="+60123456789">
                </div>
                <?php endwhile; ?>
                <div class="d-grid gap-2 col-6 mx-auto">   
                    <button class="btn btn-primary" type="submit" name="tripCheckout">Pay</button>
                </div>
            </form>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

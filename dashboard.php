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
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>My Account - Megalodon</title>
    </head>
    <body>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <div class="mx-auto mt-5 bg-white text-black p-4" style="width: 1000px; height: 200px; border-radius: .30rem">
            <h5 class="text-center">Announcement</h5>
            <p style="text-align: justify;">Please contact us at <b>+60123456789</b> or <b>email us by clicking the button below</b> for any enquiries or support if you face any technical issues.</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Email Us</button>
            </div>
        </div>
            <div class="mx-auto mt-2 mb-2 bg-white text-black p-4" style="width: 1000px; height:fit-content; border-radius: .30rem">
            <?php
            $username = $_SESSION['username'];
            $courseList = $mysqli->query("SELECT * FROM enrollment WHERE username='$username'") or die(mysqli_error($mysqli));
            $certification = $mysqli->query("SELECT * FROM certification WHERE username='$username'") or die(mysqli_error($mysqli));
            ?>
            <?php                    
            while ($row = $certification->fetch_assoc()): ?>         
                <h6 style="text-align: justify">Full Name: <?php echo $row['name']; ?></h6>
                <h6 style="text-align: justify">Highest Certification: <?php echo $row['certification']; ?></h6>
                <br/>
                <?php endwhile; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <h5 class="text-center">Purchased Courses</h5>
                        </tr>
                        <tr>
                            <th>Course Name</th>
                            <th>Price</th>
                            <th>Date Purchased</th>
                            <th>Quiz</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $courseList->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['courseName']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['datePurchased']; ?></td>
                            <td><a class="btn btn-primary" href="<?php echo $row['courseQuiz'];?>" role="button">Go to Quiz</a><td>        
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
            </table>
        </div>
        <div class="mx-auto mt-1 mb-2 bg-white text-black p-4" style="width: 1000px; height:fit-content; border-radius: .30rem">
            <table class="table">
                <thead>
                    <tr>
                        <h5 class="text-center">Purchased Orders</h5>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <th>Price (RM)</th>
                        <th>Quantity</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Delivery Address</th>
                        <th>Date Purchased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $username = $_SESSION['username'];
                    $orderList = $mysqli->query("SELECT * FROM orders WHERE username='$username'") or die(mysqli_error($mysqli));
                    while ($row = $orderList->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['productName']; ?></td>
                        <td><?php echo $row['productPrice']; ?></td>
                        <td><?php echo $row['productQuantity']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contactNo']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['datePurchased']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="mx-auto mt-1 mb-2 bg-white text-black p-4" style="width: 1000px; height:fit-content; border-radius: .30rem">
            <table class="table">
                <thead>
                    <tr>
                        <h5 class="text-center">Booked Trips</h5>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <th>Booking Date</th>
                        <th>Pax</th>
                        <th>Price (RM)</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Contact No.</th>                           
                        <th>Date Purchased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $username = $_SESSION['username'];
                    $bookingList = $mysqli->query("SELECT * FROM bookings WHERE username='$username'") or die(mysqli_error($mysqli));
                    while ($row = $bookingList->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['bookingDate']; ?></td>
                        <td><?php echo $row['pax']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['datePurchased']; ?></td>                        
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
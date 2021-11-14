<?php 
include('db/server.php');
include('header/navPublic.php');

if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
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
        <title>Home - Megalodon</title>
    </head>
    <body>
        <main>
        <div class="container py-4"> 
            <div class="p-5 mb-4 bg-light rounded-3" style="background-image: url('img/coursePreview.jpg'); background-size: cover;">
            <div class="container-fluid text-white py-5" >
                <h1 class="display-5 fw-bold">Diving Courses</h1>
                <p class="col-md-8 fs-4">Welcome to Megalodon Dive Academy, Feel free to browse the various courses we offer.</p>
                <button class="btn btn-primary btn-lg" type="button">View Courses</button>
            </div>
            </div>
        
            <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3" style="background-image: url('img/shopPreview.jpg'); background-size: cover;">
                <h2>Diving Equipment</h2>
                <p>Want to purchase diving equipment instead? Feel free to browse the products offered at our dive shop.</p>              
                <button class="btn btn-primary btn-m" type="button">Browse Equipment</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3" style="background-image: url('img/tripPreview.jpg'); background-size: cover;">
                <h2>Our Trips</h2>
                <p>If you would like to book a dive trip, feel free to check out our 3 day dive retreat at Manukan Island.</p>
                <button class="btn btn-primary btn-m" type="button">Dive Trips</button>
                </div>
            </div>
            </div>
        </div>
        </main>
    </body>
    <!-- Bootstrap Javascript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>





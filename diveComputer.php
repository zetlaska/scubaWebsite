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
        <title>Checkout - Megladon</title>
    </head>
    <body>
        <div class="mx-auto mt-5 mb-2 bg-white text-black p-5" style=" height:fit-content; width:fit-content; border-radius: .30rem">
            <form action="diveComputer.php" method="POST">
                <h5 class="text-center mb-4">Checkout Page</h1>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control"type="text" name="name" placeholder="John Smith">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input class="form-control"type="text" name="contact" placeholder="+60123456789">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control"type="text" name="address" placeholder="Your Address">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    
                    <button class="btn btn-primary" type="submit" name="bookDiveComputer">Pay</button>
                </div>
            </form>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>



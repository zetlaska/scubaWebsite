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
        <title>About Us - Megalodon</title>
    </head>
    <body>
        <div>
        <img src="img/aboutUs.jpg" class="rounded mx-auto d-block mt-5 mb-2" style="border-radius: .30rem" alt="...">
        </div>
        <div class="mx-auto mt-1 mb-2 bg-white text-black p-4" style="width: 700px; height: 410px; border-radius: .30rem">
            <div>
                <h5 class="text-center">
                A Big Welcome to Megalodon Dive Academy
                </h5>
                <br>
                <p style="text-align: justify;">
                Diving in the Asia Pacific, especially Malaysia can be simply described as spectacular. 
                Megalodon Dive Academy explores several sites around the small islands here in Malaysia, 
                as well as neighboring countries. Protected as a biological reserve by the government, 
                the water surrounding our islands (i.e. Redang, Tioman, Sipadan, Mabul) is extremely pristine and teeming with life. 
                A wide variety of marine life can be discovered beneath the island waters. Perhaps the most memorable encounters occur 
                with the pelagics that inhabit the area. In the tropical dive here, the large schools of fish swimming around and overhead 
                can be breathtaking. Water visibility is good and can range from 15-20 meter. Temperatures hovers around 28-30 degrees all 
                year round for an exquisite diving experience. Our highly flexible schedule is customizable to your trips – whether weekend or weekdays, 
                anytime you wish to learn scuba diving. 
                Drop us a line if you wish to hire our professional scuba instructor for a Discovery Scuba Experience before your Open Water Diver Certification, 
                or simply join our trips for more fun times underwater!
                </p>
            </div>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>



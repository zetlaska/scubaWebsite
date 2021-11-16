<?php 
include('db/server.php');
include('header/navPublic.php');

if (isset($_SESSION['username'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Locate Us - Megalodon</title>
    </head>
    <body>
        <div class="text-center mt-3 mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.6242416945593!2d102.23221521531045!3d2.292782458457683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1fb219b89cc8b%3A0x258fbae15f2fbbec!2sMegladon%20Dive%20Academy!5e0!3m2!1sen!2smy!4v1636153283327!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="mx-auto p-3 mb-2 bg-white text-black" style="width: 600px; height: 160px; border-radius: .30rem">
            <div>
                <h5 class="text-center">
                    Feel free to walk into our dive center at: <br>
                    Pusat Akuatik Hang Jebat,<br>
                    75260 Malacca City.<br>
                    <br>
                    We operate from 9am-6pm everyday.
                </h5>
            </div>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>



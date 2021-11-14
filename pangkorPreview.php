<?php 
include('db/server.php');
include('header/navPublic.php');

if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title>Pangkor Island - Megalodon</title>
</head>
<body>
    <div class="carousel-frame">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/pangkor1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/pangkor2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/pangkor3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="carousel-text">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Pangkor Island & Resort</h3>
                </div>
                <br \>
                <div class="card-body-2">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p><i>"This is the type of island you see on Instagram pictures and think it is too awesome to be real: a tiny island covered by lush green jungle, surrounded by white sand beaches and blue, crystal clear waters"</i></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title"> Sabah Travel Blog</cite>
                        </figcaption>
                    </figure>
                    <p class="card-text">Our 3 days 2 nights stay & scuba dive or snorkel safari holiday package provides the opportunity to experience some of the best coral reef whilst staying in beautiful beach side accommodations in Giam Island, one of the most famous diving spots in Pulau Pangkor.</p>
                    <ul class="card-list">
                        <lr><b>Facilities Include</b></lr>
                        <li>Open Air Buffet & A’La Carte Restaurant</li>
                        <li>PADI 5 Star CDC Dive Centre</li>
                        <li>Basketball and Tennis Courts</li>
                        <li>Jetski, Banana Boats, Parasailing</li>
                        <li>WiFi Internet</li>
                        <li>Swimming pool</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- Bootstrap Javascript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/listing.css" /> 
            <!-- jQuery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap JS Library -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script src="w3data.js"></script>
        <script>
            w3IncludeHTML();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <title>Dive Shop - Megalodon</title>
    </head>
    <body>
    <?php include('header/navUser.php'); ?>
        <?php require_once 'db/server.php'; ?>
        <div class="cardholder">
            <?php
                    $_SESSION["id"] = 
                    $mysqli = new mysqli('localhost', 'root', '', 'megalodon' );
                    $result = $mysqli->query("SELECT * FROM shop");


                    //pre_r($result->fetch_assoc());
                ?>
            <div class="row row-cols-5">
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <?php echo '<div class="caption"><img src="data:image/jpeg;base64,'.base64_encode($row['productImage']).'"/></div>'; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['productName']; ?></h5>
                        <p class="card-text"><?php echo $row['productDesc']; ?></p>
                            <button type="submit" class="btn btn-primary" name="buyproduct">Buy</button>
                    </div>
                </div>           
            </div>
            <?php endwhile?>
            </div>
        </div>
    </body>
</html>
<?php 
include('db/server.php');
include('header/navPublic.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <title>Login - Megalodon</title>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap JS Library -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script src="w3data.js"></script>
        <script>
            w3IncludeHTML();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="login-frame">
            <div class="carousel-text">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body-2">
                        <form method="post" action="login.php">
                            <?php include('db/errors.php'); ?>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control"type="text" name="username" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control"type="password" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="col-12-button">
                                <button type="submit" class="btn btn-success" name="login_user">Login</button>
                            </div>
                            <p>
                                Not a member? <a href="register.php">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            <div>
    </body>
</html>
<?php 
include('db/server.php');
include('header/navPublic.php');

if (isset($_SESSION['username'])) {
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
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Login - Megalodon</title>
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
        <div class="mx-auto mt-5 mb-2 bg-white text-black p-4" style="width: 500px; height: 400px; border-radius: .30rem">
            <h3 class="text-center">Login</h3>
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
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="login_user">Login</button>
                </div>
                <br>
                <p>
                    Not a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>
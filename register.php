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
        <title>Register - Megalodon</title>
    </head>
    <body>
        <div class="mx-auto mt-5 mb-2 bg-white text-black p-4" style="width: 500px; height:fit-content; border-radius: .30rem">
            <h3 class="text-center">Create Your Account</h3>
            <form method="post" action="register.php">
            <?php include('db/errors.php'); ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>                        
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password_1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm password</label>
                    <input type="password" class="form-control"name="password_2">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="reg_user">Register</button>
                </div>
                <br>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>                
            </form>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>
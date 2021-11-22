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
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Diver - Edit</title>
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
        <?php
        $username = $_SESSION['username'];
        $result = $mysqli->query("SELECT * FROM user WHERE username='$username'") or die(mysqli_error($mysqli));
        ?>
        <?php
        while ($row = $result->fetch_assoc()): ?> 
        <div class="mx-auto mt-5 mb-2 bg-white text-black p-5 pb-2" style=" height:fit-content; width:450px; border-radius: .30rem">
            <form name="updateProfile" method="post">
                <h5 class="text-center mb-4">Update Profile</h5>
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input class="form-control" type="text" name="userID" value="<?php echo $row['userID']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact No.</label>
                    <input class="form-control" type="text" name="contactNo" value="<?php echo $row['contactNo']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" style="height: 150px"><?php echo $row['address']; ?></textarea>      
                </div>  
                <div class="mx-auto" style="width:100px">
                    <button class="btn btn-success" style="width:100px" type="submit" name="updateProfile">Update</button>
                </div>
            </form>
        </div>
        <?php endwhile; ?>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

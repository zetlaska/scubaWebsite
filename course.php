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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css" /> 
        <title>Dive Programs - Megalodon</title>
    </head>
    <body>
        <div class="container">
            <div class="row row-cols-4 ms-5">
                <?php 
                $result = $mysqli->query("SELECT * FROM course");
                while ($row = $result->fetch_assoc()): ?>
                    <div class="col bg-white m-5 " style="width:300px; border-radius: .30rem" >
                        <div class="row pt-2">
                            <?php echo '<img class"center" style="width:300px; height 300px" src="data:image/jpeg;base64,'.base64_encode($row['courseImage']).'"/>'; ?>
                        </div>
                        <div class="row" style="min-height:50px">
                            <h5 class="text-center"><?php echo $row['courseName']; ?></h5>
                        </div>
                        <div class="row" style="min-height:140px">
                            <p style="text-align: justify;"><?php echo $row['courseDesc']; ?></p>
                        </div>
                        <div class="row" style="min-height:50px">
                            <h4 class="text-center">RM <?php echo $row['coursePrice']; ?></h4>
                        </div>
                        <div class="row pb-2">
                        <?php
                            $courseName= $row['courseName'];
                            $username = $_SESSION['username'];
                            $enrollCheck = $mysqli->query("SELECT * FROM enrollment WHERE courseName='$courseName' AND username='$username'") or die(mysqli_error($mysqli));
                            if ($enrollCheck->num_rows == 0):
                        ?>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-primary" href="courseCheckout.php?name=<?php echo $row['courseName'];?>&price=<?php echo $row['coursePrice'];?>&quiz=<?php echo $row['coursePage'];?>" role="button">Buy Now</a>
                            </div>
                        <?php else : ?>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" role="button" disabled>Enrolled</button>
                            </div>
                        <?php endif; ?>
                        </div>     
                    </div>           
                <?php endwhile?>
            </div>
        </div>
         <!-- Bootstrap Javascript Bundle -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
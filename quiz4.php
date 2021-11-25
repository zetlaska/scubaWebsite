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
        <title>Quiz - Megalodon</title>
    </head>
<body>
    <div class="mx-auto mt-5 bg-white text-black p-2" style="width: 700px; height: fit-content; border-radius: .30rem">
        <h5 class="text-center">Enriched Air Diver eLearning Quiz</h5>
        <?php
        if (isset($_POST['click']) || isset($_GET['start'])) {
        @$_SESSION['clicks'] += 1 ;
        $c = $_SESSION['clicks'];
        if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
        $fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
        $result2 = mysqli_query($mysqli,$fetchqry2);
        }

        } else {
        $_SESSION['clicks'] = 0;
        }
        //echo($_SESSION['clicks']);
        ?>
        <div class="d-flex justify-content-center mt-5">
            <form>
                <?php if($_SESSION['clicks']==0){ ?>
                    <button class="btn btn-primary btn-lg" name="start">Start Quiz</button><?php }?>
            </form>
        </div>
        <form action="" method="post">  				
            <table class="d-flex justify-content-center">
            <?php 
            if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz4` where id='$c'"; 
            $result=mysqli_query($mysqli,$fetchqry);
            $num=mysqli_num_rows($result);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
            ?>
            <tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option1'];?>">&nbsp;<?php echo $row['option1']; ?><br></td></tr>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option2'];?>">&nbsp;<?php echo $row['option2'];?></td></tr>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option3'];?>">&nbsp;<?php echo $row['option3']; ?></td></tr>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option4'];?>">&nbsp;<?php echo $row['option4']; ?><br><br><br></td></tr>
            <tr><td><button class="btn btn-primary btn-lg" name="click" >Next</button></td></tr> <?php }  
                                                                        ?> 
        </form>
        <?php 
        if($_SESSION['clicks']>5){ 
        $qry3 = "SELECT `ans`, `userans` FROM `quiz4`;";
        $result3 = mysqli_query($mysqli,$qry3);
        $storeArray = Array();
        while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            if($row3['ans']==$row3['userans']){
                @$_SESSION['score'] += 1 ;
            }
        }
        ?>
    <br>
    <span class="d-flex justify-content-center">Correct Answers:&nbsp;<?php echo $no = @$_SESSION['score'];?></span><br>
    <span class="d-flex justify-content-center">Your Score:&nbsp<?php echo $no*2; ?></span>
    <br>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="dashboard.php" role="button">Return to Dashboard</a>
    </div>
    <?php } ?>
    </div>
 <!-- Bootstrap Javascript Bundle -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
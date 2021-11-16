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
        <title>Dive Logs - Megalodon</title>
    </head>
    <body>
        <div class="overflow-scroll bg-white text-black mt-5" style="border-radius: .30rem">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date Created</th>
                        <th>Dive Title</th>
                        <th>Dive Site</th>
                        <th>Date</th>
                        <th>Type of Dive</th>
                        <th>Max Depth</th>
                        <th>Bottom Time</th>
                        <th>Weather</th>
                        <th>Air Temperature</th>
                        <th>Water Temperature</th>
                        <th>Bottom Temperature</th>         
                        <th>Water Type</th>
                        <th>Body of Water</th>
                        <th>Visibility</th>
                        <th>Visibility (m)</th>
                        <th>Waves</th>
                        <th>Current</th>
                        <th>Surge</th>
                        <th>Suit</th>
                        <th>Weight (KG)</th>
                        <th>Weight Type</th>
                        <th>Cylinder Type</th>
                        <th>Cylinder Size</th>
                        <th>Gas Type</th>
                        <th>Oxygen</th>
                        <th>Nitrogen</th>
                        <th>Helium</th>
                        <th>Cylinder Pressure (Initial)</th>
                        <th>Cylinder Pressure (After Dive)</th>
                        <th>Cylinder Pressure (Used)</th>
                        <th>Additional Gear</th>
                        <th>Feeling</th>
                        <th>Notes</th>
                        <th>Buddy</th>
                        <th>Dive Center</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $username = $_SESSION['username'];
                    $bookingList = $mysqli->query("SELECT * FROM divelog WHERE username='$username'") or die(mysqli_error($mysqli));                    
                    while ($row = $bookingList->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['dateAdded']; ?></td>
                        <td><?php echo $row['diveTitle']; ?></td>
                        <td><?php echo $row['diveSite']; ?></td>
                        <td><?php echo $row['diveDate']; ?></td>
                        <td><?php echo $row['diveType']; ?></td>
                        <td><?php echo $row['maxDepth']; ?></td>
                        <td><?php echo $row['bottomTime']; ?></td>
                        <td><?php echo $row['weather']; ?></td>
                        <td><?php echo $row['tempAir']; ?></td>
                        <td><?php echo $row['tempSurface']; ?></td>
                        <td><?php echo $row['tempBottom']; ?></td>
                        <td><?php echo $row['waterType']; ?></td>
                        <td><?php echo $row['waterBody']; ?></td>
                        <td><?php echo $row['visibility']; ?></td>
                        <td><?php echo $row['visibility2']; ?></td>
                        <td><?php echo $row['waves']; ?></td>
                        <td><?php echo $row['current']; ?></td>
                        <td><?php echo $row['surge']; ?></td>
                        <td><?php echo $row['suit']; ?></td>
                        <td><?php echo $row['weight']; ?></td>
                        <td><?php echo $row['weightType']; ?></td>
                        <td><?php echo $row['cylinderType']; ?></td>
                        <td><?php echo $row['cylinderSize']; ?></td>
                        <td><?php echo $row['gas']; ?></td>
                        <td><?php echo $row['oxygen']; ?></td>
                        <td><?php echo $row['nitrogen']; ?></td>
                        <td><?php echo $row['helium']; ?></td>
                        <td><?php echo $row['cylinder1']; ?></td>
                        <td><?php echo $row['cylinder2']; ?></td>
                        <td><?php echo $row['cylinder3']; ?></td>
                        <td><?php echo $row['additional']; ?></td>
                        <td><?php echo $row['experience']; ?></td>
                        <td><?php echo $row['note']; ?></td>
                        <td><?php echo $row['buddy']; ?></td>
                        <td><?php echo $row['diveCenter']; ?></td>
                        <td><?php echo $row['comments']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <!-- Bootstrap Javascript Bundle -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body> 
</html>
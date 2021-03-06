<?php
session_start();

$username = "";
$email    = "";
$id= '';
$errors = array(); 

// Database connections
$mysqli = new mysqli('localhost', 'root', '', 'megalodon' ) or die(mysqli_error($mysqli));
// Register
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password_1 = mysqli_real_escape_string($mysqli, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($mysqli, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($mysqli, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// Login
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
          $_SESSION['message'] = "Wrong username/password combination";
          $_SESSION['msg_type'] = "danger";
        }
    }
  }

// Course Checkout
if(isset($_POST['courseCheckout'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $courseName = $_POST['courseName'];
  $courseQuiz = $_POST['quiz'];
  $price = $_POST['price'];
  $name = $_POST['name'];

  $mysqli->query("INSERT INTO enrollment (courseName, courseQuiz, username, price, email) VALUES('$courseName', '$courseQuiz', '$username', '$price', '$email')") or die($mysqli_error());
  $_SESSION['message'] = "Your have been successfully enrolled into the course!";
  $_SESSION['msg_type'] = "success";

  $certCheck= $mysqli->query("SELECT username FROM certification WHERE username='$username'");
  if($certCheck->num_rows == 0) {
    $mysqli->query("INSERT INTO certification (username, name) VALUES('$username', '$name')") or die($mysqli_error());
  }

  header('location: dashboard.php');
}

// Shop Checkout
if(isset($_POST['shopCheckout'])){
  $productName = $_POST['productName'];;
  $price = $_POST['price'];
  $username = $_POST['username'];
  $name = $_POST['name'];
  $contactNo = $_POST['contactNo'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $productQuantity = $_POST['productQuantity'];
  $productPrice = $price*$_POST['productQuantity'].'.00';

  $mysqli->query("INSERT INTO orders (productName, productPrice, productQuantity, username, name, email, contactNo, address) VALUES('$productName', '$productPrice', $productQuantity, '$username', '$name', '$email', '$contactNo', '$address')") or die($mysqli_error());

  $_SESSION['message'] = "Your order is successful!";
  $_SESSION['msg_type'] = "success";

  header('location: dashboard.php');
}

// Trip Checkout
if(isset($_POST['tripCheckout'])){
  $location = $_POST['location'];
  $pax = $_POST['pax'];
  $price = $_POST['price']*$_POST['pax'].'.00';
  $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));
  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  
  $mysqli->query("INSERT INTO bookings (location, pax, price, bookingDate, username, name, email, contact) VALUES('$location', '$pax', '$price', '$bookingDate', '$username', '$name', '$email', '$contact')") or die($mysqli_error());
  $_SESSION['message'] = "Your booking has been submitted!";
  $_SESSION['msg_type'] = "success";

  header('location: dashboard.php');
}

// Create Dive Log
if(isset($_POST['createLog'])){
  $username = $_SESSION['username'];
  $diveTitle = $_POST['diveTitle'];
  $diveSite = $_POST['diveSite'];
  $diveDate = date('Y-m-d', strtotime($_POST['diveDate']));
  $diveType = $_POST['diveType'];
  $maxDepth = $_POST['maxDepth'];
  $bottomTime = $_POST['bottomTime'];
  $weather = $_POST['weather'];
  $tempAir = $_POST['tempAir'];
  $tempSurface = $_POST['tempSurface'];
  $tempBottom = $_POST['tempBottom'];
  $waterType = $_POST['waterType'];
  $waterBody = $_POST['waterBody'];
  $visibility = $_POST['visibility'];
  $visibility2 = $_POST['visibility2'];
  $waves = $_POST['waves'];
  $current = $_POST['current'];
  $surge = $_POST['surge'];
  $suit = $_POST['suit'];
  $weight = $_POST['weight'];
  $weightType = $_POST['weightType'];
  $cylinderType = $_POST['cylinderType'];
  $cylinderSize = $_POST['cylinderSize'];
  $gas = $_POST['gas'];
  $oxygen = $_POST['oxygen'];
  $nitrogen = $_POST['nitrogen'];
  $helium = $_POST['helium'];
  $cylinder1 = $_POST['cylinder1'];
  $cylinder2 = $_POST['cylinder2'];
  $cylinder3 = $_POST['cylinder3'];
  $additional = $_POST['additional'];
  $experience = $_POST['experience'];
  $note = $_POST['note'];
  $buddy = $_POST['buddy'];
  $diveCenter = $_POST['diveCenter'];

  $mysqli->query("INSERT INTO divelog (username, diveTitle, diveSite, diveDate, diveType, maxDepth, bottomTime, weather, tempAir, tempSurface, tempBottom, waterType, waterBody, visibility, visibility2, waves, current, surge, suit, weight, weightType, cylinderType, cylinderSize, gas, oxygen, nitrogen, helium, cylinder1, cylinder2, cylinder3, additional, experience, note, buddy, diveCenter) VALUES('$username', '$diveTitle', '$diveSite', '$diveDate', '$diveType', '$maxDepth', '$bottomTime', '$weather' ,'$tempAir', '$tempSurface', '$tempBottom', '$waterType', '$waterBody', '$visibility', '$visibility2', '$waves', '$current', '$surge', '$suit', '$weight', '$weightType', '$cylinderType', '$cylinderSize', '$gas', '$oxygen', '$nitrogen', '$helium', '$cylinder1', '$cylinder2', '$cylinder3', '$additional', '$experience', '$note', '$buddy', '$diveCenter')") or die($mysqli_error());
  $_SESSION['message'] = "Your log has been saved!";
  $_SESSION['msg_type'] = "success";

  header('location: viewLog.php');
}

if(isset($_POST['updateProfile'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "megalodon";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $contactNo = $_POST['contactNo'];
    $address = $_POST['address'];
    $sql="UPDATE user SET name='$name', contactNo='$contactNo', address='$address' WHERE userID='$userID'";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  
    $conn->close();

    header("location:dashboard.php");

    $_SESSION['message'] = "Your profile has been updated!";
    $_SESSION['msg_type'] = "success";
  

}
?>


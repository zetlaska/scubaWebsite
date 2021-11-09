<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$viewCourse = false;
$id= '';
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'megalodon');
$mysqli = new mysqli('localhost', 'root', '', 'megalodon' ) or die(mysqli_error($mysqli));


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  if(isset($_POST['bookManukan'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $location = 'Manukan';
    $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));
    $username = $_SESSION['username'];


    $mysqli->query("INSERT INTO trip (fname, lname, email, bookingDate, location, username) VALUES('$fname', '$lname', '$email', '$bookingDate', '$location', '$username')") or die($mysqli_error());
    $_SESSION['message'] = "Your booking has been submitted!";
    $_SESSION['msg_type'] = "success";

    header('location: index.php');

}

if(isset($_POST['bookPangkor'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $location = 'Pangkor';
    $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));
    $username = $_SESSION['username'];


    $mysqli->query("INSERT INTO trip (fname, lname, email, bookingDate, location, username) VALUES('$fname', '$lname', '$email', '$bookingDate', '$location', '$username')") or die($mysqli_error());
    $_SESSION['message'] = "Your booking has been submitted!";
    $_SESSION['msg_type'] = "success";

    header('location: index.php');

}


/*
if(isset($GET['courseCheck'])){
  
  $username = $_SESSION['username'];
  $courseName = $mysqli->query("SELECT * FROM openWaterDiver VALUES($name)") or die($mysqli_error());
  

  if ($username = $courseName ){
    $viewCourse = true;

  }
}

if(isset($GET['productCheck'])){
  
  $username = $_SESSION['username'];

}

*/

/*
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO test (name, location) VALUES('$name', '$location')") or die($mysqli_error());
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header('location: index.php');
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM test WHERE id=$id") or die($mysqli_error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;

    
    $result = $mysqli->query("SELECT * FROM test WHERE id=$id") or die($mysqli_error());

    if ($result->num_rows){
        $row = $result->fetch_array();
        $name = $row['name'];
        $location = $row['location'];
    }  
}



if (isset($GET['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];



    $mysqli->query("UPDATE test SET name='$name', location='$location' WHERE id=$id") or die($mysqli->error);
    $row = $result->fetch_array($resulttype = MYSQLI_ASSOC);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: index.php');
    
}

*/ 
  ?>

  

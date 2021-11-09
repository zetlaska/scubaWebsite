<?php

$mysqli = new mysqli('localhost', 'root', '', 'megalodon' ) or die(mysqli_error($mysqli));


if(isset($_POST['bookManukan'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $location = 'Manukan';
    $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));


    $mysqli->query("INSERT INTO trip (fname, lname, email, bookingDate, location) VALUES('$fname', '$lname', '$email', '$bookingDate', '$location')") or die($mysqli_error());
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

}

if(isset($_POST['bookPangkor'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $location = 'Pangkor';
    $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));


    $mysqli->query("INSERT INTO trip (fname, lname, email, bookingDate, location) VALUES('$fname', '$lname', '$email', '$bookingDate', '$location')") or die($mysqli_error());
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

}

?>  
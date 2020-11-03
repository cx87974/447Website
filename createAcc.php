<?php

require 'connect.php';

if (isset($_POST['fname'])) {
    $fn = $_POST['fname'];
}

if (isset($_POST['lname'])) {
    $ln = $_POST['lname'];
}

if (isset($_POST['uName'])) {
    $uN = $_POST['uName'];
}

if (isset($_POST['email'])) {
    $em = $_POST['email'];
}

if (isset($_POST['pWord'])) {
    $pass = $_POST['pWord'];
}

$sql = "INSERT INTO users (firstName, lastName, username, email, password) VALUES ('$fn', '$ln', '$uN', '$em', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);

echo "\n";
echo $fn;
echo "           ";
echo $ln;
echo "           ";
echo $uN;
echo "           ";
echo $em;
echo "           ";
echo $pass;
    
?>
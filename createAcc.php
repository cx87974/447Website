<?php

session_start();

require 'connect.php';

if (isset($_POST['fname']) && !empty(trim($_POST['fname']))) {
    $fn = mysqli_real_escape_string($conn, $_POST['fname']);
}
else {
    $msg = 'Please fill out your first name field';
    $_SESSION['error'] = $msg;
}
if (isset($_POST['lname']) && !empty(trim($_POST['lname']))) {
    $ln = mysqli_real_escape_string($conn, $_POST['lname']);
}
else {
    $msg = 'Please fill out your last name field';
    $_SESSION['error'] = $msg;
}
if (isset($_POST['uName']) && !empty(trim($_POST['uName']))) {
    $uN = mysqli_real_escape_string($conn, $_POST['uName']);
}
else {
    $msg = 'Please fill out your username field';
    $_SESSION['error'] = $msg;
}
if (isset($_POST['email']) && !empty(trim($_POST['email']))) {
    $em = mysqli_real_escape_string($conn, $_POST['email']);
}
else {
    $msg = 'Please fill out your first email field';
    $_SESSION['error'] = $msg;
}
if (isset($_POST['pWord']) && !empty(trim($_POST['pWord']))) {
    $pass = mysqli_real_escape_string($conn, $_POST['pWord']);
}
else {
    $msg = 'Please fill out your password field';
    $_SESSION['error'] = $msg;
}
if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    $msg = 'The email you have entered is invalid.';
    $_SESSION['error'] = $msg;
}else{
    $msg = null;
}
if(!empty($msg)){
    header('location: makeAccount.php');
}
$action = array();
$action['result'] = null;
 
$text = array();

if($action['result'] != 'error'){
    $fn = md5($fn);
    $ln = md5($ln);
    $uN = md5($uN);
    $em = md5($em);
    $pass = md5($pass);
}

$action['text'] = $text;

$sql = "INSERT INTO users (firstName, lastName, username, email, password) VALUES ('$fn', '$ln', '$uN', '$em', '$pass')";

if (mysqli_query($conn, $sql)) {
    session_abort();
    header("location: confirmation.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    session_abort();
}
mysqli_close($conn);


?>
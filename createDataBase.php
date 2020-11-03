<?php

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
<?php

    require('connect.php');

    if (isset($_POST['uName']) && !empty(trim($_POST['uName']))) {
        $uN = mysqli_real_escape_string($conn, $_POST['uName']);
    }
    else {
        exit("Please enter your username");
    }
    if (isset($_POST['pWord']) && !empty(trim($_POST['pWord']))) {
        $pass = mysqli_real_escape_string($conn, $_POST['pWord']);
    }
    else {
        exit("Please enter your password");
    }

    $sql = 'SELECT id, password FROM acc_db.users WHERE username = ?';
    
    if($stmt = $conn->prepare($sql)){

        $stmt->bind_param('s', $uN);
        $stmt->execute();

        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($id, $password);
            $stmt->fetch();

            if($password == $pass){
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $uN;
                $_SESSION['id'] = $id;
                echo 'Welcome ' . $_SESSION['name'] . '!';
                header('location: home.php');
            } else {
                echo 'Incorrect username and/or password!';
            }
        } 
        else {
            echo 'Incorrect username and/or password!';
        }
        $stmt->close();
    }
    
?>
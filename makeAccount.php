<?php
    session_start();
    if(!empty($_SESSION['error'])){
        $msg = $_SESSION['error'];
    }
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="makeAccount.css">
    <body>
        <video autoplay muted loop id="bgVideo">
        <source src="siteBG.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
        <h1 id="header">Bamboo</h1>
        <img src="Picture1.png" id="logo" alt="Bamboo Logo" width="50" height="50">



        <form action="createAcc.php" for="signUp" method="POST">
            <div class = "textPrompt">
                <h2>
                    BambooBot
                 </h2>
                 <p>               
                    Welcome fill out the form to register!
                </p>
            </div>

            <div>
                <img src="avatar_login.png" alt="Avatar" class="avatar"></img>
                <?php
                    if(isset($msg)){
                        echo '<div class="textPrompt">'.$msg.'</div>';           
                    }
                ?>
            </div>
            <div class = "loginInfo">
                
                <label id="up_size" for="fname">First Name</label><br>
                <input type="text" placeholder="Enter your first name" id="fname" name="fname"><br>

                <label id="up_size" for="lname">Last Name</label><br>
                <input type="text" placeholder="Enter your first name" id="lname" name="lname"><br>

                <label id="up_size" for="uname">Username</label><br>
                <input type="text" placeholder="Enter a Username" id="uName" name="uName"><br>
                
                <label id="up_size" for="email">Email:</label><br>
                <input type="text" placeholder="Please enter a vaild email" id="email" name="email"><br>

                
                
                <label id="up_size" for="pWord">Password</label><br>
                <input type="password" placeholder="Enter a Password" id="pWord" name="pWord"><br><br>
                
                <button type="submit">Register</button><br>

                <a id="hyp_links" href="login.html">Go Back To Login<br><br></a>

            </div>
            
        </form>         

    </body>

</html>

<?php
    session_abort();
    ?>
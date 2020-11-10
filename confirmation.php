<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="confirmation.css">
    <body>
        <video autoplay muted loop id="bgVideo">
        <source src="siteBG.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
        <h1 id="header">Bamboo</h1>
        <img src="Picture1.png" id="logo" alt="Bamboo Logo" width="50" height="50">

        <script src = "emailS.js"></script>

        <form action="login.html">
            <div class = "textPrompt">
                <h2>
                    BambooBot
                 </h2>
                 <p>               
                    Please Confirm Your Account!
                </p>

                <img src="avatar_login.png" alt="Avatar" class="avatar"></img>
                <p> We have sent you an email regarding your account confirmation. Please confirm your email. </p>
                <button id="pWord" href="login.php">Sign In</button><br>
                </div>

            </form>         

        
    <?php
    session_abort();
    ?>

    </body>

</html>
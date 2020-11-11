


function sendEmail(){
    var email = document.getElementById("uName").value;
    Email.send({
        Host: "smtp.gmail.com",
        Username: 'roibu1@umbc.edu',
        Password: "ElaR1776", // need to change
        To: email,
        From: 'no-reply@umbc.edu' ,
        Subject : "Password Reset",
        Body : "Reset your password here: ",
    }).then(
        message => alert("Check your email!")
    );


}



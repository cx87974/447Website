document.getElementById().onclick = function() {sendEmail()};


function sendEmail(){
   
    console.log("sending email")
    Email.send({
        Host: "smtp.gmail.com",
        Username: 'roibu1@umbc.edu',
        Password: "ElaR1776", // need to change
        To: 'roibu1@umbc.edu',
        From: 'roibu1@umbc.edu' ,
        Subject : "test",
        Body : "this is a test",
    }).then(
        message => alert("mail sent")
    );


}



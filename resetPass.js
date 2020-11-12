


function sendEmail(){
    var email = document.getElementById("uName").value;
    
    var newPassowrd = makeid(12);
    var message = "Password reset to ";
    var mP = message.concat(newPassowrd);

    console.log(mP)

    Email.send({
        Host: "smtp.gmail.com",
        Username: 'roibu1@umbc.edu',
        Password: "ElaR1776", // need to change
        To: email,
        From: 'no-reply@umbc.edu' ,
        Subject : "Password Reset",
        Body :mP,
    }).then(
        
        setTimeout('redirect()', 100)
        
    );
    

}

function redirect(){

    window.location.assign("resetPass.html");
}
function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
 }
 
 
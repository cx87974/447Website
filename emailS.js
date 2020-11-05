document.getElementById("email").onclick = function() {sendEmail()};


function sendEmail(){

    var nodemailer = require('nodemailer');

    var transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
        user: 'roibu1@umbc.edu',
        pass: 'Clone1232'
    }
    });

    var mailOptions = {
        from: 'roibu1@gmail.com',
        to: 'roibu206@gmail.com',
        subject: 'Sending Email using Node.js',
        text: 'That was easy!'
    };

    transporter.sendMail(mailOptions, function(error, info){
    if (error) {
        console.log(error);
    } else {
        console.log('Email sent: ' + info.response);
    }
    }); 


}



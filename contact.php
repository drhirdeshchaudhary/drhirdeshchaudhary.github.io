<html>
    <head>
    <title>Dr. Hirdesh Chaudhary</title>
        <link rel="icon" href="img/favicon.ico" />
        <meta http-equiv="refresh" content="1,index.html#contact"  />
    </head>
    <body>
<?php
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mail = $_POST['email'];


$to = 'drhchaudhary11@gmail.com';
$subject = 'Feedback/Query from http://www.drhirdeshchaudhary.com'; 
$headers = "From: '$mail'";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
echo $mail_sent ? "Mail sent" : "Mail failed";
?>
        </body>
</html>
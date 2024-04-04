<?php
if($_SERVER['REQUEST_METHOD'] == ['POST']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $reciever = 'kingotechs23@gmail.com';
    $headers = 'From $email';
    if(mail($reciever, $subject, $message, $headers)){
   echo "Your message has been sent. Thank you!";
    }
    else {
        echo "Sorry, unable to send. try again!";
    }
}
?>
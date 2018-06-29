<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './functions.php';
require '../lib/phpmailer/src/Exception.php';
require '../lib/phpmailer/src/PHPMailer.php';
require '../lib/phpmailer/src/SMTP.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_line = "";
    $subject = "";
    if(empty($_POST['company']))
    {
        $subject = $_POST['name']+" has contacted us!";
        $first_line = "We have a new contact request from "+$_POST['company']+" !";
    }
    else
    {
        $subject = $_POST['name'].", from ".$_POST['company']." has contacted us!";
        $first_line = "We have a new contact request from ".$_POST['name']." on behalf of ".$_POST['company'];
    }

    $args['head_line'] = $first_line;
    $args['message'] = $_POST['message'];
    $args['email'] = $_POST['email'];
    $email = getEmail("contact_email.html", $args);

    try {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->Host = "mail.privateemail.com";
        $mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Port = 465;
        $mail->Username = "hello@upgency.com";
        $mail->Password = "asandwichisbetter";

        $mail->setFrom("contactus@upgency.com", "Contact Requests");

        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = $email;

        $mail->send();
        echo 'Message has been sent';
    } catch(Exception $e) {
        echo "Message could not be sent. Mailer Error: ", $mail->ErrorInfo;
    }
} else {
    header("Location: /");
    die();
}
?>
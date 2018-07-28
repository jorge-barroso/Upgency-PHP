<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './functions.php';
require '../lib/phpmailer/src/Exception.php';
require '../lib/phpmailer/src/PHPMailer.php';
require '../lib/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: /");
    die();
}

$first_line = "";
$subject = "";
if(empty($_POST['company']))
{
    $subject = $_POST['name']+" has contacted us!";
    $first_line = "We have a new contact request from "+$_POST['company']+" !";
}
else
{
    $subject = trim($_POST['name']).", from ".trim($_POST['company'])." has contacted us!";
    $first_line = "We have a new contact request from ".trim($_POST['name'])." on behalf of ".trim($_POST['company']);
}

$args['head_line'] = $first_line;
$args['message'] = trim($_POST['message']);
$args['email'] = trim($_POST['email']);
var_dump($args);
$email = getEmail("./contact_email.html", $args);

try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Host = "mail.privateemail.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "hello@upgency.com";
    $mail->Password = "asandwichisbetter";
    $mail->SMTPDebug = 2;

    $mail->setFrom("hello@upgency.com", "Contact Requests");
    $mail->addAddress("hello@upgency.com", "Upgency Contact");

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $email;

    if(!$mail->send())
        throw Exception();

    echo 'Message has been sent';
} catch(Exception $e) {
    echo "Message could not be sent. Mailer Error: ", $mail->ErrorInfo;
}
?>
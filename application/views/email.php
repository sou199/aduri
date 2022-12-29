<?php
error_reporting(-1);
ini_set('display_errors', 'On');


require_once 'config.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['msg'];
$property = $_POST['property'];
$comp_json = json_encode($property);
// $arr_string = implode(', ', $property);

if (!empty($name) && !empty($phone) && !empty($email)) {
    $sql = "INSERT INTO enquiry (name, phone, email, message,property) values('$name', '$phone', '$email', '$message','$comp_json')";
    mysqli_query($con, $sql);
} else {
    echo 1;
    die;
}

// $mail->Host = 'smtp.gmail.com';
$mail->Host = 'mail.adurimarketing.com';
$mail->port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'support@adurimarketing.com';
$mail->Password = '1_FBAOml?8^o';
$mail->SMTPDebug = 1;
$mail->setFrom($email, $name);
$mail->AddAddress('sneha.u@venusdm.in');
//$mail->AddAddress('support@adurimarketing.com');
//$mail->AddBCC('raviteja.b@venusdm.in');

//$mail->addAddress('wajid.developer1@gmail.com');
// $mail->AddCC('raviteja.b@venusdm.in');


$mail->isHTML(true);
$mail->Subject = 'Enquiry Form';
$mail->Body = '<h3>Name : ' . $name . '<br>Phone Number : ' . $phone . '<br>Email : ' . $email . '<br>Property : ' . $comp_json . '<br>Message : ' . $message . '</h3>';

if (!$mail->send()) {
    echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
} else {
    echo 0;
}

<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$dados = [
    'email' => $_POST['email'] ?? '',
    'password' => $_POST['password'] ?? '',
    'adress' => $_POST['adress'] ?? '',
    'name' => $_POST['name'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'hour' => $_POST['hour'] ?? '',
    'adress' => $_POST['adress'] ?? '',
    'adress' => $_POST['adress'] ?? '',
];

$mail = new PHPMailer(true);

try {
    $mail -> isSMTTP();
    $mail -> Host ='';
    $mail ->SMTPAuth =true;
    $mail -> Username = '';
    $mail -> Password = '';
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail ->Port = 587;
    $mail -> CharSet = 'UTF-8';

    $mail->setFrom('jamilaissa@mail.com',  'Test');

    $mail -> addAddress('sddasd@mail.com', 'savagery');


} catch (Exception $e) {
    echo "Erro";
}
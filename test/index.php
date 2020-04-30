<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$mail = new Email(
    2,
    "smtp.gmail.com",
    "nameemail@gmail.com",
    "123456789",
    "SSL",
    "587",
    "nameemail@gmail.com",
    "Business name"
);
$mail->sendMail(
    "This is a subject - EMAIL",
    "<h1>This is a body's mail</h1>",
    "nameemail@gmail.com",
    "name Replay",
    "nameemail@gmail.com",
    "Address name"
);

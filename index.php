<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$mail = new Email();
$mail->sendMail(
    "This is a subject - EMAIL",
    "<h1>This is a body's mail</h1>",
    "name@gmail.com",
    "name Replay",
    "lastname@gmail.com",
    "Address name"
);

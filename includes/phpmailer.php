<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\BackEndDev-Ecommerce_App\vendor\autoload.php';

/* Create a new PHPMailer object. */
$mail = new PHPMailer();

/* Set the mail sender. */
$mail->setFrom('testfromweb1@gmail.com', 'My Store');


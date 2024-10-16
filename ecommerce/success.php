<?php
include 'includes/header.php';
include 'classes/Payment.php';
include 'classes/session.php';

$payment = new Payment();
$payment->processPayment(300);

include 'includes/footer.php';
?>

<?php
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $message]);

echo "Thanks! We received your message.";
?>

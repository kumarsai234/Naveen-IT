<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = $_POST['email'];
  $message = htmlspecialchars($_POST['message']);

  mail("youremail@example.com", "Contact from $name", $message, "From: $email");

  echo "Thank you for contacting us!";
}
?>
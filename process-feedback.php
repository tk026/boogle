<?php

require 'includes/config.php';

// define variables and set to empty values
$name = $email = $feedback = '';

// Add data from form
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Next, we must do some validation to see if we got valid data
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($name)) {
    $errors['name'] = "Name is required";
  }
  if (empty($email)) {
    $errors['email'] = "Email is required";
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Please enter a correct email";
  }
  if (empty($feedback)) {
    $errors['feedback'] = "Feedback is required";
  }

  if (!empty($errors)) {
    require 'feedback.php';
    die();
  }

  // Here is where you would send an email or save to the database etc

  $success = addFeedbackToDatabase($dbh, $name, $email, $feedback);

  if (!$success) {
    die('There was an error submitting your feedback');
  }

  require 'thanks.php';
  die();
}

header("Location: feedback.php");

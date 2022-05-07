<?php

if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['email']))
    $email = $_POST['email'];
  if (isset($_POST['message']))
    $message = $_POST['message'];
  if (isset($_POST['subject']))
    $subject = $_POST['subject'];
  if ($name === '') {
    echo '<script> alert("Please fill out all fields."); </script>';
    die();
  }
  if ($email === '') {
    echo '<script> alert("Please fill out all fields."); </script>';
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script> alert("Please fill out all fields."); </script>';
      die();
    }
  }
  if ($subject === '') {
    echo '<script> alert("Please fill out all fields."); </script>';
    die();
  }
  if ($message === '') {
    echo '<script> alert("Please fill out all fields."); </script>';
    die();
  }


  $content="From: " . $name . "\n Email: " . $email . "\n Message: " . $message;
  $recipient = "jocelynliu2000@gmail.com";
  $mailheader = "From: " . $email . "\r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmed</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container my-5">
        <h3> Your message has been sent! </h1>
        <h5> Thanks for writing me :) </h3>
    </div>

    
</body>
</html>
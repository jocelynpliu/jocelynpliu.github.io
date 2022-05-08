<?php
if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['email']))
    $email = $_POST['email'];
  if (isset($_POST['message']))
    $message = $_POST['message'];
  if (isset($_POST['subject']))
    $subject = $_POST['subject'];

  if ( isset($_POST['name']) && !empty($_POST['name'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['subject']) && !empty($_POST['subject'])
        && isset($_POST['message']) && !empty($_POST['message']) ) {
      $content="From: " . $name . "\n Email: " . $email . "\n Message: " . $message;
      $recipient = "jocelynliu2000@gmail.com";
      $mailheader = "From: " . $email . "\r\n";
      mail($recipient, $subject, $content, $mailheader) or die("Error!");

  }

  
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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container my-5">
      <?php if ( isset($_POST['name']) && !empty($_POST['name'])
              && isset($_POST['email']) && !empty($_POST['email'])
              && isset($_POST['subject']) && !empty($_POST['subject'])
              && isset($_POST['message']) && !empty($_POST['message']) ) : ?>
        <h3> Your message has been sent! </h1>
        <h5> Thanks for writing me :) </h3>

        <?php else :?>
        <h5 class="text-danger"> Please fill out all the fields. <a href="contact.php">Try again</a> </h3>
        <?php endif; ?>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>
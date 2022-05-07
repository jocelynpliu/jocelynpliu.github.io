<?php 

if ( isset($_POST['name']) && isset($_POST['email']) ) {
  if ( empty($_POST['name']) || empty($_POST['email']) ) {

    $error = "Please enter username and password.";

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocelyn Liu</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container my-5" id="cs">
        <h4><b>Contact Me</b></h4>
        <div class="container">

  <form action="contact_confirmation.php" method="POST">
    
    <label for="fname"><span class="text-danger">*</span> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name...">
    <br>
    <label for="fname"><span class="text-danger">*</span> Email</label>
    <input type="text" id="email" name="email" placeholder="Your email...">
    <br>
    <label for="subject"><span class="text-danger">*</span> Subject</label>
    <input id="subject" name="subject" placeholder="What's up?" ></input>
    <br>
    <label for="message"><span class="text-danger">*</span> Message</label>
    <textarea id="message" name="message" placeholder="Your message..." ></textarea>
    <br>
    <p class="text-danger">* Required </p>
    <?php
						if ( isset($error) && !empty($error) ) {
							echo $error;
						}
					?>
    <input type="submit" value="Submit">

  </form>
</body>

<script>
  </script>
</html>
<?php 
    require "config/config.php";

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}

    $sql = 'DELETE FROM books WHERE ID = "' . $_GET["id"] . '";';
    

    $result = $mysqli->query($sql);
	if (!$result) {
		echo $mysqli->error;
		exit();
	}
    

    $mysqli->close();
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
        <h3> This book has been successfully deleted. </h1>
    </div>

</body>
</html>
<?php 
  require "config/config.php";

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}

    $sql = 'SELECT * FROM books WHERE ID = "' . $_GET["id"] . '";';
    

    $result = $mysqli->query($sql);
	if (!$result) {
		echo $mysqli->error;
		exit();
	}


    $object = $result->fetch_assoc();
    

    $mysqli->close();

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
    <?php include 'nav.php'?>

    <div class="container my-5">
        <button type="submit" class="btn btn-danger" id="delete-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> <br>
        
        <img class="my-3" src="<?php echo $object["imageURL"]?>" alt="book cover">
        <h5><?php echo $object["title"]; ?></h5>
        <h6>by <?php echo $object["author"]; ?> </h6>
        <p class="my-3"> <?php echo $object["description"]?></p>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this suggestion?
      </div>
      <div class="modal-footer">
        <form action="delete_confirmation.php">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" id="delete-button">Delete</button>
        <input class="data" value="<?php echo $_GET["id"]?>" name="id" id="id">
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
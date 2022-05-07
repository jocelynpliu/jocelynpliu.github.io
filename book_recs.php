<?php
    require "config/config.php";

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}

    $sql = 'SELECT imageURL from books;';
    $result = $mysqli->query($sql);

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
    <?php include 'nav.php' ?>
    <div class="container my-5">
        <div class="row header">
            <h4><b>Recommend me a book</b></h4>
            <p> 
                I love to read and am always searching for new books. Send me some recs!
            <p>
            
            <form id="search-form">
            <div class="form-group rounded" id="book-search">
                <div class="form-outline">
                <input type="search" class="form-control rounded" placeholder="Search by title or author" aria-label="Search" id="search-term-id"/>
                <button button type="submit" class="btn btn-light">
                    <img class="search-icon" src="assets/search-icon.png" style="width: 30px;">
                </button>
            </div>
            </form>
    </div>

    <div class="container my-5"> 
        <form action="book_confirmation.php" method="POST" id="book-form">
            <div class="row form-group"id="search-results">
                
            </div>
            <button type="submit" class="btn btn-primary" id="send-button"s>Select</button>
        </form>
    </div>

    
    <div class="row">
    <?php while ( $row = $result->fetch_assoc() ) : ?>
        <img src="<?php echo $row["imageURL"]?>" class="book-cover"/>
    <?php endwhile; ?>
    </div>
</div>


    
    

<script>

    document.querySelector("#search-form").onsubmit = function(event) {
    // prevent the form from actually being submitted
    event.preventDefault();

    // Get the user's search input
    let searchInput = document.querySelector("#search-term-id").value.trim();

    // Call the ajax function, pass in the search input, log out results
    ajaxGet("https://www.googleapis.com/books/v1/volumes?q=" + searchInput + "&key=AIzaSyC75f3jpgTWPU_Q6_33Llkgwf-77tmoDQw", function(results) {

        console.log("success");

        // convert the data into js object
        let jsResults = JSON.parse(results);

        let resultItems = jsResults.items;

        let resultsList = document.querySelector("#search-results");
        console.log(resultsList);

        // Clear the previous list of results
        resultsList.replaceChildren();

        // Run through the list of results and dynamically create a <li> tag for each of the result
        for(let i=0; i< 5; i++) {
            let htmlString = `
            <div class="book-result">
                <input type="radio" id=${resultItems[i].id}  value=${resultItems[i].id} name="book-ids">
                <label for=${resultItems[i].id}><img src=${resultItems[i].volumeInfo.imageLinks['smallThumbnail']}>
                        <p>${resultItems[i].volumeInfo.title} <br> by ${resultItems[i].volumeInfo.authors}</label>

                <br>
            </div>

            
        `;
            // Append to the <ol> tag
            resultsList.innerHTML += htmlString;
        }

    });

    function ajaxGet(endpointUrl, returnFunction){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', endpointUrl, true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    // When ajax call is complete, call this function, pass a string with the response
                    returnFunction( xhr.responseText );
                } else {
                    alert('Type in a title or author!');
                    console.log(xhr.status);
                }
            }
        }
        xhr.send();
    };
}
            </script>
</body>
</html>
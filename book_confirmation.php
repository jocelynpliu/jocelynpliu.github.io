<?php
  require 'config/config.php';
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
        <h3> Your book has been sent. </h1>
        <h5> Can't wait to read it! </h3>
        <div id="book-rec" class="my-5">
        </div>
    </div>
    
    <script>

        let url = "https://www.googleapis.com/books/v1/volumes/";
        url += '<?php echo $_POST["book-ids"] ?>';
        url += "?key=AIzaSyC75f3jpgTWPU_Q6_33Llkgwf-77tmoDQw";
        console.log(url);
        ajaxGet(url, function(results) {

    console.log("success");

    // convert the data into js object
    let jsResults = JSON.parse(results);
    console.log(jsResults.volumeInfo);

    let resultsList = document.querySelector("#book-rec");

    let htmlString = ` <div> <img src="${jsResults.volumeInfo.imageLinks["smallThumbnail"]}" style="width: 100px;"> <p>${jsResults.volumeInfo.title} <br> by ${jsResults.volumeInfo.authors} </p> <br> <p>${jsResults.volumeInfo.description}</p> </div>`;
    resultsList.innerHTML += htmlString;

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
                    alert('AJAX Error.');
                    console.log(xhr.status);
                }
            }
        }
        xhr.send();
    };
    </script>

    
</body>
</html>
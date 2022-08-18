
<!DOCTYPE html>
<head>
    <title>GIPHY API</title>
<link rel="stylesheet" href="css/styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js" integrity="sha512-mp3VeMpuFKbgxm/XMUU4QQUcJX4AZfV5esgX72JQr7H7zWusV6lLP1S78wZnX2z9dwvywil1VHkHZAqfGOW7Nw==" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" />

</head>
<body>
    <nav>
        <div class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GIPHY API</a>
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="random.php">Random</a>
            <a class="navbar-brand" href="trending.php">Trending</a>
        </div>
    </nav>
<form  action="index.php" method="post">
<div class="container">
    <div class="row height d-flex justify-content-center">
      <div class="col-md-8">
            <div class="search">
             <i class="fa fa-search"></i>
             <input type="text" name="search" class="form-control" placeholder="Keyword">
             <button type="submit" name="submit" class="btn btn-primary">Search</button>
            </div>
                        
        </div>
                      
    </div>
</div>
</form>
</body>
<?php

$url = file_get_contents("https://api.giphy.com/v1/gifs/search?api_key=BUoG03BQWWU12bffUrapMZcWA9qOqRaN&q=random&limit=25&offset=0&rating=pg-13&lang=en");
$json = json_decode($url); 
foreach ( $json as $values ) { 
    foreach ( $values as $value ) { 
        if ( isset( $value->images->original->url ) ) 
        { 
            echo "<img src='{$value->images->original->url}' width='100' height='100'>"; } } 
        }

   
?>

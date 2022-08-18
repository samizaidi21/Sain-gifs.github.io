<!DOCTYPE html>
<head>
    <title>GIPHY API</title>
    <link rel="icon" href="icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js" integrity="sha512-mp3VeMpuFKbgxm/XMUU4QQUcJX4AZfV5esgX72JQr7H7zWusV6lLP1S78wZnX2z9dwvywil1VHkHZAqfGOW7Nw==" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" />
<link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <nav>
        <div id="nav1" class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GIPHY API</a>
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="random.php">Random</a>
            <a class="navbar-brand" href="trending.php">Trending</a>
        </div>
    
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
</nav>
<?php

if (isset($_POST['submit'])){
    $sear = $_POST['search'];
    $search= str_replace(' ', '+', $sear);

$url = file_get_contents("http://api.giphy.com/v1/gifs/search?q=.'$search'.&api_key=y0CrwypS39NMhjj1jKiI4O0eVHJMyFvN");
$json = json_decode($url); 
foreach ( $json as $values ) { 
    foreach ( $values as $value ) { 
        if ( isset( $value->images->original->url ) ) 
        { 
            echo "<img src='{$value->images->original->url}' width='100' height='100'>"; } } 
        }

    }
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color:white"><a style="text-decoration: none; color:white"  href=""><i class="bi bi-graph-up-arrow"></i>Trending</a></h1>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-md-12">
                        <?php            
$url = file_get_contents("https://api.giphy.com/v1/gifs/trending?api_key=BUoG03BQWWU12bffUrapMZcWA9qOqRaN&limit=8&rating=g");
$json = json_decode($url); 
foreach ( $json as $values ) { 
    foreach ( $values as $value ) { 
        if ( isset( $value->images->original->url ) ) 
        { 
            echo "<img src='{$value->images->original->url}' width='100' height='100'>"; } } 
        }

   
                        ?>
</div></dvi></div></div></div></div></div></main>                                                                                         



</main>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #212529!important; color: white;">
    © 2022  Made with ❤  By  : 
    <a class="text-white" href="#">Sami</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

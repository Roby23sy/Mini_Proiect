<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Main</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/1c2cc89c8c.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script>
        function menu_apear() {
            document.getElementById("menu_overlay").style.display = "block";
        }

        function  menu_disapear() {
            document.getElementById("menu_overlay").style.display = "none";
        }
    </script>

</head>

<body>

<div class="overlay" id="menu_overlay">
        <div>
            <button type="button" onclick="menu_disapear()" class="button_close"><i class="fas fa-arrow-left fa-2x menu_arrow"></i></button>
        </div>
        <div id="text">
                This is a full screen menu!
                <br>
                <br>
                Close me from the
                <br>
                upper "Back Arrow"
        </div>
</div>

<nav class="navbar navbar-light bg-light">

  <div class="container-fluid">
  <button type="button" onclick="menu_apear()" class="button"><i class="fas fa-bars  menu_bars"></i></button>
  <img src="assets/logo-imdb.png" alt="IMDb logo" class="logo" loading="lazy">
  <i class="fas  fa-user user"></i>
  </div>
</nav>


<div class="movie_cards">
        <div class="blog-post">
            <div class="blog-post_img">
                <img class="card-img" src="assets/movies-images/space-force.jpg" alt="movie-image" loading="lazy">
            </div>
            <div class="blog-post_info">
                <h1 class="blog-post_title"> Space Force </h1>
                <h2><i class="fas fa-star text-yellow-400"></i> <span style="font-size: 14px">6.9</span></h2>
                <p class="blog-post_description"><strong>Director:</strong> Robert Zemeckis</p>
                <button type="button" class="btn btn1 btn-primary btn-block ">View More</button>
            </div>
        </div>


<div class="blog-post">
    <div class="blog-post_img">
        <img class="card-img" src="assets/movies-images/forest-gump.jpg" alt="movie-image" loading="lazy">
    </div>

    <div class="blog-post_info">
        <h1 class="blog-post_title">Forest Gump </h1>
        <h2><i class="fas fa-star text-yellow-400"></i> <span style="font-size: 14px">8.8</span></h2>
        <p class="blog-post_description">
            <strong>Director: </strong>Robert Zemeckis
            <br>
            <strong>Writers: </strong>Winston Groom
            <br>
            <strong>Stars: </strong>Tom Hanks, Robin Wright, Gary Sinise
        </p>
        <button type="button" class="btn btn3 btn-primary btn-block ">View More</button>
    </div>
</div>

<div class="blog-post">
    <div class="blog-post_img">
        <img class="card-img" src="assets/movies-images/joker.jpg" alt="movie-image" loading="lazy">
    </div>

    <div class="blog-post_info">
        <h1 class="blog-post_title"> Joker </h1>
        <h2><i class="fas fa-star"></i> <span style="font-size: 14px">7.0</span></h2>
        <p class="blog-post_description">
            <strong>Stars: </strong>Tom Hanks, Robin Wright, Gary Sinise
        </p>
        <button type="button" class="btn btn1 btn-primary btn-block ">View More</button>
    </div>
</div>

</div>

<div id="app">
        <app></app>
</div>

</body>
<script src="{{mix('js/app.js')}}"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

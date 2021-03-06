<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- add icon link -->
  <link rel="icon" type="image/png" href="images/icon.png"/>

  <title>Welcome to Fluffy Style</title>
  <!-- bootstrap + my CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"> <!-- for main -->
  <link rel="stylesheet" href="../css/style.css"> <!-- for other pages -->

  
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/85608ad0f1.js" crossorigin="anonymous"></script>

<?php
$url = $_SERVER['REQUEST_URI'];
if ($url == "Vesta/index.html") : ?> <script type="text/javascript" src="js/scroll.js"></script>
<?php endif; ?>


<script type="text/javascript" src="js/flux.js" charset="utf-8"></script>
      
      <script type="text/javascript" charset="utf-8">
          $(function(){
              if(!flux.browser.supportsTransitions)
                  alert("Flux Slider requires a browser that supports CSS3 transitions");
                  
              window.f = new flux.slider('#slider', {
                  pagination: false,
                  controls: false,
                  transitions: ['explode', 'tiles3d', 'bars3d', 'cube', 'turn'],
                  autoplay: false
              });
              
              $('.transitions').click(function(event){
                  event.preventDefault();
                  window.f.next($(event.target).data('transition'), $(event.target).data('params'));
              });
          });
      </script>






  <section id="header">
    <div>
      <nav id="menu" class="navbar fixed-top navbar-expand-md navbar-light">
        <a href="index.php#header"> <img class="logo" src="images/logo.png" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="nav justify-content-center navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php#header">דף הבית</a>
              
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="index.php#about">עלינו</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="index.php#portfolio">פורטפוליו</a>
            </li>
            <li class="nav-item">
              <a class="nav-link big" href="index.php#contacts">תיצרו קשר</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

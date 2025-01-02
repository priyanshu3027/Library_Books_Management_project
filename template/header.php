<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <style>
      .glyphicon-paperclip {
        color: black; 
      }
      .glyphicon-shopping-cart {
        color: darkblue;
      }
      .glyphicon-phone-alt {
        color: black; 
      }
      .glyphicon-book {
        color: brown; 
      }
      .wishlist-icon {
        color: red; 
      }
      .marquee {
        font-size: 1.5em; 
        color: red;
        font-weight: bold;
      }
      .navbar-brand {
        font-weight: bold
      }
      .glyphicon-pencil {
        color: grey
      }

    </style>
  </head>

  <body style="background-color: #FFEBE5">
    <marquee class="marquee"> --------------- SALE --------------- SALE --------------- SALE ---------------UPTO_______90%_OFF_______OFFER_TILL------------------9--NOVEMBER--2024--------------- SALE --------------- SALE --------------- SALE ---------------</marquee>

    <nav class="navbar bg-info navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-pencil"></span><u>Priyanshu's E-Books</u></a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
              <li><a href="cart.php"><span class="glyphicon glyphicon-heart wishlist-icon"></span>&nbsp; Wishlist</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: olive">
      <div class="container">
        <h1>Welcome to Priyanshu's Bookstore – Your One-Stop Book Destination!</h1>
        <p class="lead">At Priyanshu's Bookstore, we are passionate about connecting readers with the books they love. Whether you’re searching for popular novels in English, timeless classics in Hindi, or the latest resources in Computer and IT, our diverse selection has something for everyone. Explore our carefully curated collection across genres, from literature and self-help to advanced tech guides, to find the perfect read to expand your knowledge or simply enjoy. Join our community of book lovers and dive into a world of knowledge and discovery today!</p>
        
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">
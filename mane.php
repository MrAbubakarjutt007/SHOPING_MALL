<?php
include ("connection.php");
session_start();
  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:login.php");
     exit;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mane page</title>
    <link rel="stylesheet" href="manedata2.css"/>
    <!-- <link rel="stylesheet" href="nevheader/nevbardat.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>
<?php include "headerdata/headershop.php"?>

<section>
        <nav class="navbar navbar-expand-lg navbar-light" id="nevcolor">
                <div class="container-fluid">
                    <h1 class="navbar-brand"><i class="fa-sharp fa-solid fa-cart-shopping"></i>SHOPPING MALL</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dataitems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="dataitems">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mane.php"><i class="fa-solid fa-house-chimney"></i>Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="clouthpage/clouth.php" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">clouth</a>
                        <ul class="dropdown-menu" aria-labelledby="navDropdown">
                            <li><a class="dropdown-link" href="clouthpage/clouth.php"><i class="fa-solid fa-shirt"></i>men clouth</a></li>
                            <li><a class="dropdown-link" href="womanclouth/woman.php"><i class="fa-solid fa-shirt"></i>women clouth</a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            shouse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navDropdown">
                            <li><a class="dropdown-link" href="#"><i class="fa-solid fa-cart-shopping"></i>men shouse</a></li>
                            <li><a class="dropdown-link" href="#"><i class="fa-solid fa-cart-shopping"></i>women shouse</a></li>
                            <li><hr class="dropdown-divider"></li>
                           
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
  </section>     
<section class="mt-2">    
<div class="container-fluid">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="shoppingimages/shoppingslider4.jpg" alt="shoppingslider4" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>We had such a great time in LA!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="shoppingimages/shoppingslider2.jpg" alt="shoppingslider2" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                                </div> 
                            </div>
                            <div class="carousel-item">
                            <img src="shoppingimages/shoppingslider3.jpg" alt="shoppingslider3" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                                </div>  
                            </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                            </div>
                          
        </div>
       </div>
    </div>
</section> 
<section>
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-12">
                      <h1 class="text-center mt-2">SHOPPING MALL<span class="badge bg-danger">VIDEOS</span></h1>
                      <br>  
                    <div class="owl-carousel owl-theme">
            <div class="item-video" data-merge="1">
            <iframe src="https://www.youtube.com/embed/0nWCTIKGCmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="item-video" data-merge="1">
            <iframe  src="https://www.youtube.com/embed/hQvzvcEIA8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="item-video" data-merge="1">
            <iframe  src="https://www.youtube.com/embed/u3gyr1Ml-AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="item-video" data-merge="1">
            <iframe src="https://www.youtube.com/embed/mQHPHGAWp6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="item-video" data-merge="1">
            <iframe src="https://www.youtube.com/embed/7m16dFI1AF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        </div>
        </div>
        </div>
</section>
<br>
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <h1 class="text-center">SHOPPING MALL<span class="badge bg-danger">INFORMATION</span></h1>
        </div>
    </div>
</div>
</section>
<br>
<section>
    <div class="containter-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-4">
                <div class="divdata">   
                <h1><i class="fa-sharp fa-solid fa-bag-shopping" id="font"></i></h1>
                <h4>Going to the Supermarket:</h4>
                    <p> 
                        Martha is at the grocery store, getting ready for a house party. She has a list of what she needs with her as she goes along. The first section she comes has produce. Martha sees apples, bananas, cherries, grapes, and strawberries.
                    </p>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <div class="divdata">
                   <h1><i class="fa-sharp fa-solid fa-cart-shopping" id="font"></i></h1>
                   <h4>ESL Shopping Reading:</h4>
                   <p>
                   When using shopping vocabulary you will most likely have to speak, doing an ESL shopping reading activity will help you learn the vocabulary. This will help you when you have to speak about shopping in the future.
                   </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <div class="divdata">
                  <h1><i class="fa-solid fa-handshake" id="font"></i></h1>
                  <h4>ESL Shopping Reading:</h4>
                   <p>
                   When using shopping vocabulary you will most likely have to speak, doing an ESL shopping reading activity will help you learn the vocabulary. This will help you when you have to speak about shopping in the future.
                   </p>
                </div>  
            </div>
        </div>
    </div>
</section>
<br>
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <h1 class="text-center">SHOPPING MALL FOOTER<span class="badge bg-danger">INFO </span></h1>
        </div>
    </div>
</div>
</section>
<br>
<?php include "footerdata/footer.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
</script>
</body>
</html>
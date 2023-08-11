<?php
include ("./connection.php");

  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:../login.php");
     exit;
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>footer data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  </head>
  <body>
    <section class="mt-2">
        <div class="container-fluid" id="greadientdata">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <div class="listdata mt-4">
                  <ul class="uidata">
                   <li><a href="#" class="lidata"><i class="fa-brands fa-twitter"></i>shoppinginfo on twitter</a></li>
                    <li><a href="#" class="lidata"><i class="fa-brands fa-facebook"></i>shoppingmallfbpage</a></li>
                    <li><a href="#" class="lidata"><i class="fa-solid fa-phone"></i>03495858489</a></li>
                    <li><a href="#" class="lidata"><i class="fa-brands fa-whatsapp"></i>03013200402</a></li> 
                  </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <div class="listdata mt-2">
                  <ul class="uidata">
                   <li><h4 class="lidata"><i class="fa-solid fa-location-dot"></i>FASLABAD,GOJRA,<br>TOBA, LAHORE</h4></li>
                    <li><a href="#" class="lidata"><i class="fa-brands fa-shopify"></i>Shipping Policy</a></li>
                    <li class="text-center"><img src="logosimages/shoppinglogos.jpg" alt="shoppinglogos" width="100px" class="img-thumbnail"> </li>
                    <li><a href="#" class="lidata"></a></li> 
                  </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <div class="listdata mt-4">
                  <ul class="uidata">
                    <li>
                    <form class="d-flex">
                    <button class="btn"id="lidata" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">     
                    </form>
                   </li>
                    <li><a href="#" class="gmaildata"><i class="fa-solid fa-envelopes-bulk"></i>shoppingmall123@gmail.com</a></li>
                    <li><a href="#" class="lidata"><i class="fa-sharp fa-solid fa-house-chimney"></i>HOME PAGE INFO</a></li> 
                  </ul>
                  </div>
                </div>
            </div>
            <div class="container">
                 <div class="listdata mt-2"><p class="lidata text-center"><strong><i>Copyright © 2023 shoppingmall. All rights reserved.</i> </strong></p></div>
            </div>
        </div>
    </section>
  </body>
</html>
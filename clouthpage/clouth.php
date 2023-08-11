<?php
include ("../connection.php");
session_start();
  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:../login.php");
     exit;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clouthdata2.css">
    <title>clouth page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
<?php include "../modelform/formmodel.php"?>
   <?php include "../models/manmodel1.php"?>
    <?php include "../models/manmodel2.php"?>
    <?php include "../models/manmodel3.php"?>
    <?php include "../models/manmodel4.php"?>
    <?php include "../models/manmodel5.php"?>
    <?php include "../models/manmodel6.php"?>
    <?php include "../models/manmodel7.php"?>
    <?php include "../models/manmodel8.php"?>
    <?php include "../models/manmodel9.php"?>
<?php include "../nevheader/nevbar.php"?>
  <section>     
  <div class="container-fluid" id="backgrounded">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width:18rem;">
                <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal1data"><img src="clouthimages/clouthpakeg11img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg11img"></a>
                    <div class="card-body">
                      <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4556</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">1500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal2data"><img src="clouthimages/clouthpakeg2img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg2img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4557</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">6000RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal3data"><img src="clouthimages/clouthpakeg3img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg3img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4558</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">6000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width: 18rem;">
            <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal4data"><img src="clouthimages/clouthpakeg4img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg4img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4559</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">6000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal5data"><img src="clouthimages/clouthpakeg5img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg5img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4560</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">4000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal6data"><img src="clouthimages/clouthpakeg6img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg6img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4561</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">2000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width: 18rem;">
            <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal7data"><img src="clouthimages/clouthpakeg7img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg7img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4562</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">1000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal8data"><img src="clouthimages/clouthpakegimg8.jpg" class="card-img-top img-thumbnail" alt="clouthpakegimg8"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4563</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">8000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#manModal9data"><img src="clouthimages/clouthpakeg9img.jpg" class="card-img-top img-thumbnail" alt="clouthpakeg9img"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4564</strong></span></h5>
                    <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">3000RS</strong></i></p>
                    <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                    <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div>
    </section>
        <?php include "../footerdata/footer.php"?>      
          
</body>
</html>
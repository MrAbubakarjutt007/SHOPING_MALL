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
    <title>womanpage</title>
    <link rel="stylesheet" href="womandata1.css">
    <link rel="stylesheet" href="../footerdata/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <?php include "../modelform/formmodel.php"?>
    <?php include "../models/model1.php"?>
    <?php include "../models/model2.php"?>
    <?php include "../models/model3.php"?>
    <?php include "../models/model4.php"?>
    <?php include "../models/model5.php"?>
    <?php include "../models/model6.php"?>
    <?php include "../models/model7.php"?>
    <?php include "../models/model8.php"?>
    <?php include "../models/model9.php"?>
    <?php include "../nevheader/nevbar.php"?>
    <div class="container-fluid" id="backend">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width:18rem;">
                <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#myModal"><img src="womanimages/womanimg1.jpg" class="card-img-top img-thumbnail" alt="womanimg1"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1020</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">3000RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a> <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>

                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#ourModal"><img src="womanimages/womanimg3.jpg" class="card-img-top img-thumbnail" alt="womanimg3"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1021</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">2500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn"  data-bs-toggle="modal" data-bs-target="#weModal"><img src="womanimages/womanimg5.jpg" class="card-img-top img-thumbnail" alt="womanimg5"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1022</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">3500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width: 18rem;">
            <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#dataModal"><img src="womanimages/womanimg7.jpg" class="card-img-top img-thumbnail" alt="womanimg7"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1023</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">4500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#fifthModal"><img src="womanimages/womanimg9.jpg" class="card-img-top img-thumbnail" alt="womanimg9"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1024</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">1500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#sixhtModal"><img src="womanimages/womanimg11.jpg" class="card-img-top img-thumbnail" alt="womanimg11"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1025</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">4500RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card item1" style="width: 18rem;">
            <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#sevenModal"><img src="womanimages/womanimg13.jpg" class="card-img-top img-thumbnail" alt="womanimg13"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #CD1026</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">1000RS</strong></i></p>
                      <a href="#" class="btn btndata"><i class="fa-solid fa-credit-card"></i>ADD CARD</a>
                      <button type="button" class="btn btndata" data-bs-toggle="modal" data-bs-target="#formModal">
                        ORDER NOW
                      </button>
                    </div>
                  </div>
                  <div class="card item1" style="width: 18rem;">
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#eightModal"><img src="womanimages/womanimg15.jpg" class="card-img-top img-thumbnail" alt="womanimg15"></a>
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
                  <a href="#" class="card-link btn" data-bs-toggle="modal" data-bs-target="#nineModal"><img src="womanimages/womanimg17.jpg" class="card-img-top img-thumbnail" alt="womanimg17"></a>
                    <div class="card-body">
                    <h5 class="card-title">MAN BLACK:<span class="spandata"><strong>CODE #AB4556</strong></span></h5>
                      <p class="card-text">PRICE:<i class="fa-solid fa-barcode"><strong class="spandata">1500RS</strong></i></p>
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
    <?php include "../footerdata/footer.php" ?>
</body>
</html>
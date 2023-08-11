<?php
include ("../connection.php");
session_start();
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
    <title>shopping web</title>
    <link rel="stylesheet" href="nevheader/nevbardat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
  </head>
<body>
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
                        <a class="nav-link active" aria-current="page" href="../mane.php"><i class="fa-solid fa-house-chimney"></i>Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">clouth</a>
                        <ul class="dropdown-menu" aria-labelledby="navDropdown">
                            <li><a class="dropdown-link" href="../clouthpage/clouth.php"><i class="fa-solid fa-shirt"></i>men clouth</a></li>
                            <li><a class="dropdown-link" href="../womanclouth/woman.php"><i class="fa-solid fa-shirt"></i>women clouth</a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            shouse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navDropdown">
                            <li><a class="dropdown-link" href="#"><i class="fa-solid fa-boot"></i>men shouse</a></li>
                            <li><a class="dropdown-link" href="#"><i class="fa-solid fa-boot"></i>women shouse</a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
  </section> 
  </body>
</html>
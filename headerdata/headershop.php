<?php
if(isset($_SESSION['logindata']) && $_SESSION ['logindata']==true)
{
   $logindata=true;
}
else
{
  $logindata=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>headerdata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="container-fluid"  id="colordata">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-3">
                <div class="flag d-flex">
                    <img src="logosimages/headerlogopk.png" alt="headerlogopk" width="10%" class="logodata"><marquee class="mt-1" direction="right"  id="colorsceam"><i>BEST SHOPPINH MALL IN PAKISTAN</i></marquee>
                </div>
   
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                    <div>
                    <form class="d-flex">
                    <button class="btn" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">     
                    </form>
                    </div>          
                 
            </div>
            <div class="col-lg-3 col-md-3 col-3">
                <div>
                    <?php 
                    if(!$logindata){
                    echo '<a href="./signup.php" class="underline"><i class="fa-solid fa-registered"></i>registration</a>
                    <a href="./login.php" class="underline"><i class="fa-solid fa-user"></i>login</a>';
                    }
                    if($logindata){
                    echo'<a href="./logout.php" class="underline">logout</a>';
                    }
                    ?>
                </div>           
   
            </div>
        </div>
    </div>
</body>
</html>
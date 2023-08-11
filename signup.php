<?PHP
  $showAlert=false;
  $showError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
        {        
            include ("connection.php");
            $username=$_POST["username"];
            $usermaildata=$_POST["emailinfo"];
            $password=$_POST["password"];
            $cpassword=$_POST["cpassword"];
             $existData="SELECT * FROM `shopingdatainfo` WHERE username='$username'";   
             $result=mysqli_query($conn,$existData);
             $numExistRows=mysqli_num_rows($result);
             if($numExistRows > 0)
             {
                $showError="your user is alredy exist";       
             } 
             else
             { 
            if(($password==$cpassword))
            {
                 $sql="INSERT INTO `shopingdatainfo`(`username`,`emailinfo`, `password`, `timedatainfo`) VALUES ('$username','$usermaildata','$password',current_timestamp())";
                 $result=mysqli_query($conn,$sql);
                  if($result)
                  {
                    $showAlert=true;
                    header("location:login.php");
                  } 
            }
            else
            {
                $showError="password do not match";    
            }
        }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- font awsome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php
    if($showAlert){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>signup!</strong> You are signup, and go to login page.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>signup!</strong> '. $showError .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        ?><div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <dic class="classin">
                        <a href="signup.php">SIGNUP</a>
                        <a href="login.php">LOGIN</a>
                    </dic>
                </div>
            </div>
        </div>
         <h1 class="text-center text-dark">SIGNUP TO OUR WEBSITE</h1>
     <div class="container-fluid text-dark">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">        
      <form action=" " method="POST">
            <div class="form-group mb-3 col-md-6">
                <label for="username" class="form-label">USER NAME</label>
                <input type="text" class="form-control" id="username"  name="username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="usermail" class="form-label">GMAIL ID</label>
                <input type="email" class="form-control" id="usermail" name="emailinfo" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="mypassword" required>
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="cpassword" class="form-label">conferm passwoed</label>
                <input type="password" class="form-control" name="cpassword" id="exampledata">
                <div id="emailHelp" class="form-text text-white" required>conferm passwoed</div>
            </div>
            <button type="submit" class="btn btn-dark col-md-6">SIGNUP<i class="fa-solid fa-user-plus"></i></button>
       </form> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      
      </div>
      </div>
    </div>
</body>
</html>
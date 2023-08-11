<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
<section>
<!-- The Modal -->
<div class="modal fade" id="formModal">
 <div class="modal-dialog">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">OREDR GOOD FABRIC<i class="fa-sharp fa-solid fa-cart-shopping"></i></h4>
       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
     <form action="" mathod="get" id="datacenter">
        <label for="code">PRODUCT CODE  PASTED</label><br>
        <input type="text" name="itemcode" placeholder="CODE"><br>
        <label for="username">USER NAME</label><br>
        <input type="text" name="username" placeholder="NAME"><br>
        <label for="address">ADDRESS</label><br>
        <input type="text" name="useraddress" placeholder="ADDRESS"><br>
        <label for="phonenumber" placeholder="PHONENUMBER">PHONE NUMBER</label><br>
        <input type="text" name="phonenumber" placeholder="PHONENUMBER"><br>
        <input type="submit" name="submitdata" value="submit"/>
       </form>
       <?php
                include "connection.php";
                error_reporting(0);
                if(isset($_GET['submitdata']))
                {
                $idinfodata=$_GET['idinfo'];   
                $itemdata=$_GET['itemcode'];
                $userdata=$_GET['username'];
                $addressdata=$_GET['useraddress'];
                $numberdata=$_GET['phonenumber'];
                if($itemdata!="" && $userdata!="" && $addressdata!="" && $numberdata!="")
                {
                $qureyrun = "INSERT INTO `shopingtable`(`idinfo`,`itemcode`,`username`,`useraddress`,`phonenumber`) VALUES ('$idinfodata','$itemdata','$userdata','$addressdata','$numberdata')";
                $rundata = mysqli_query($conn,$qureyrun);
                if($rundata)
                    {
                        echo "<script> alert('data sended successfully') </script>";
                        ?>
                                        <META http-equiv="refresh" content="0; URL=http://localhost/shoppingmall/mane.php"> 
                                        <?php
                    } 
                   
                }
                else
                {
                echo "qurey fall";
                }
            }    

        ?>
     </div> 
   </div>
 </div>
</div>
    </section>
    </section>
</body>
</html>
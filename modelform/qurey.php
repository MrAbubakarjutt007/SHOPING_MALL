<?php
   include "connection.php";
   error_reporting(0);
   $idinfodata=$_GET['idinfo'];
   $itemdata=$_GET['itemcode'];
   $userdata=$_GET['username'];
   $addressdata=$_GET['useraddress'];
   $numberdata=$_GET['phonenumber'];
   $qureyrun = "INSERT INTO `shopingtable`(`idinfo`,`itemcode`,`username`,`useraddress`,`phonenumber`) VALUES ('$idinfodata','$itemdata','$userdata','$addressdata','$numberdata')";
   $rundata = mysqli_query($conn,$qureyrun);
   if($rundata)
    {
        echo "connection successfull qurey";
      } 
      else
      {
       echo "qurey fall";
      }

?>
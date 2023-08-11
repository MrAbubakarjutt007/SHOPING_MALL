<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>popup</title>
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="container popdata">
       <button type="submit" class="btn btndata" onclick="openpopup()" >submit</button>
       <div class="popup" id="popup">
       <h1><i class="fa-sharp fa-solid fa-bag-shopping" id=""></i></h1>
         <img src="" alt="">
         <form action="" mathod="">
           <label for="itemcode">itemcode</label><br>
           <input type="text" ><br>
           <label for="name">name</label><br>
           <input type="text"><br>
           <label for="phonenumber">phonenumber</label><br>
           <input type="text"><br>
           <label for="address">address</label><br>
           <input type="text"><br><br>
           <input type="submit"  value="submitdata">
         </form>
         <button type="submit" class="btn btndata"  onclick="closepopup()">close</button>
       </div>
    </div>
    <script>
        let popupdata = document.queryslecter('popup');
              
        function openpopup()
        {
            popupdata.classlist.add('openpopup');
        }
        function closepopup()
        {
            popupdata.classlist.remove('openpopup');
        }
    </script>
</body>
</html>
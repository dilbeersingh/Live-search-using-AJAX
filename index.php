<?php

include"db.php";


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="index.css" rel="stylesheet">
    <script src="index.js"></script>
</head>
<body>
   <div class="col-lg-3">
   <form method="post" action="index.php">
       
    <input class="form-control"type="text" autocomplete="off" name="search" id="search" onkeyup="getdata(this.value)"> 
       
       
   </form>
   
   <div  class="col-lg-12" style="padding:0px;"id="searchdata">
       
       
   </div>
    </div>
    
</body>
</html>

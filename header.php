<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doscum | syndex</title>
    <link rel="stylesheet" type="text/css" href="header.css">

  </head>
  <body style="background-color: #e1eaed ;color:white;font-weight:100;font-family:Lato" >
    <?php
     /* #363a3f
      #313a47
      #1c2430 */
       ?>

   <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="#home" class="active">Doscum</a>
    </div>

    <!-- Left-aligned links (default) -->
    <a href="#news">News</a>
    <a href="#contact">Contact</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
      <a href="#search">Search</a>
      <a href="#about">About</a>
    </div>

  </div>



  <div class="menu">
    <a href="#home" class="active2">Doscum</a>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

  <div  class="topnav2" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#search">Search</a>
  <a href="#about">About</a>
  </div>

  </div>


<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav2") {
    x.className += " responsive";
  } else {
    x.className = "topnav2";
  }
}
  </script>
  </body>

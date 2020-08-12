<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    <link href="homecss/style.css" rel="stylesheet">
    
   
    </head>
    
    
    
    
           <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!--   Navbar brand 
  <a class="navbar-brand" href="#">Navbar</a>-->

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="homepage.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Request_1.php">Request</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="setting.php">Setting</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="homepage.php">Home</a>
          <a class="dropdown-item" href="about">About</a>
          <a class="dropdown-item" href="Request_1">Request</a>
          <a class="dropdown-item" href="setting.php">Setting</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

   
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    <body>
        
      <!-- Extended material form grid -->
      <form action="../model/acceptrequest.php" name="eman" method="post">
  <!-- Grid row -->
  
  
  <div class="container" >
    <div class="row align-items-lg-center" >
        <div class="col-sm-10" style="border:1px solid#333" margin-top="100px;">
  <div class="form-row">
    <!-- Grid column -->
    <div class="col-sm-8">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputEmail4MD" placeholder="username" name="user">
        <label for="inputusername">username</label>
      </div>
    </div>
    </br>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-8">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="password" class="form-control" id="inputPassword4MD" placeholder="Password" name="old">
        <label for="inputPassword4MD">old Password</label>
      </div>
    </div>
    
    <div class="col-md-6">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="password" class="form-control" id="inputPassword4MD" placeholder="Password" name="new">
        <label for="inputPassword4MD"> new Password</label>
      </div>
    </div>
    
    <div class="col-md-6">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="password" class="form-control" id="inputPassword4MD" placeholder="Password" name="confirm">
        <label for="inputPassword4MD">confirm new Password</label>
      </div>
    </div>
    <!-- Grid column -->
  </div>
             <button type="submit" class="btn btn-primary btn-md" onclick="validate()">Sign in</button>
        </div>
    </div>
  </div>
  
  <!-- Grid row -->

  <script> 
      function validate(){
          var accept =document.forms["eman"]["new"].value;
          var act =document.forms["eman"]["confirm"].value;
          if(accept!==act){
              alert("not match");
              
          }
              
         
          
      }
//       function unless(){
//          var accept =document.forms["eman"]["user"].value;
//          var act =document.forms["eman"]["old"].value;
//          if(accept!==act){
//              alert("not match");
//              
//          }
//              
//         
//          
//      }
      </script>
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-12">
      <!-- Material input -->
<!--      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputAddressMD" placeholder="1234 Main St">
        <label for="inputAddressMD">Address</label>
      </div>
    </div>-->
    <!-- Grid column -->

    <!-- Grid column -->
<!--    <div class="col-md-12">
       Material input 
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputAddress2MD" placeholder="Apartment, studio, or floor">
        <label for="inputAddress2MD">Address 2</label>
      </div>
    </div>-->
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
<!--  <div class="form-row">
     Grid column 
    <div class="col-md-6">
       Material input 
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputCityMD" placeholder="New York City">
        <label for="inputCityMD">City</label>
      </div>
    </div>
     Grid column 

     Grid column 
    <div class="col-md-6">
       Material input 
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputZipMD" placeholder="11206-1117">
        <label for="inputZipMD">Zip</label>
      </div>
    </div>-->
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
 
</form>
<!-- Extended material form grid -->  
        
    
    
<!--    <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https:/github/emanhashim/"> emanhashim42@gmail.com</a>
  </div>-->

</body>

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019Copyright:
   
  </div>
  <!-- Copyright -->

</footer>
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

</html>

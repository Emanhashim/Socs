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
<!--    <script type="text/javascript" src="jss.js"></script>-->
    </head>
    <body>
        
        
        
        
        
        <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!--   Navbar brand 
  <a class="navbar-brand" href="#">Clerance System</a>-->

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
            <a class="dropdown-item" href="about.php">About</a>
            <a class="dropdown-item" href="Request_1.php">Request</a>
            <a class="dropdown-item" href="setting.php">setting</a>
        </div>
      </li>

    </ul>
    <!-- Links -->
 
    
    
    </nav>
<!--/.Navbar-->

<div class="container">
    <div class="row align-items-lg-center">
        <div class="col-sm-10" style="border:1px solid#333">
            
            
       
   
            <form class="text-center border border-light p-5" action="../model/requestsender.php" method="post">   
    <p class="h4 mb-4">
        





<!--Blue select-->
<label class="mdb-main-label"> Reason Type </label>
</br>
<select class="mdb-select md-form colorful-select dropdown-primary" name="select">
  <option value="Graduated">Graduted</option>
  <option value="End Year">End of Year</option>
  <option value="Withdrawal">withdrawal's</option>
  <option value="other">Other</option>
 
</select>

<div class="mdb-main-label" col-lg-8">
     <label for="inputMDEx" >Choose your date</label>
  <input type="date" id="inputMDEx" class="form-control" name="date">
 
</div>

<!--/Blue select-->
   <div class="form-group" >
       <label for="exampleFormControlTextarea3"><h3>Type Your Reason Here</h3></label>
  <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="reason"></textarea>
</div>

<button  class="btn btn-secondary">Send request</button> 

 </div>
         
    </div>
</div>

 </form>  

    </body>
    

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019Copyright:
   
  </div>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  


</html>



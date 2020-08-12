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
    
    
    
    
    <style> 
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-flex-direction: column;
    flex-direction: column;
    width: 100%;
    height: 100%;
margin-top: 100px;
}

.flex-item {
    
   width: 800px;
    height: 700px;
    
}

.second{
    width:700px;
    height:700px;
}

</style>
    </head>
    
<!--    <script>
      $('.datepicker').pickadate({
today: '',
clear: 'Clear selection',
close: 'Cancel'
})
      </script>-->
    <body>
        
           
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
            <a class="dropdown-item" href="about.php">About</a>
            <a class="dropdown-item" href="Request_1.php">Request</a>
            <a class="dropdown-item" href="setting.php">Setting</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

<!--    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>-->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->




        
   
   
  




<!-- Footer -->
 <!--/.Navbar-->
 <div class="flex-container">
     
     <div class="flex-item">
 <div class="accordion" id="accordionExample">
     
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
            <h3>step 1</h3>
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
      data-parent="#accordionExample">
      <div class="card-body">
         the first step is login to user account if only you are a user to this system
         They need clearance of all borrowed items from different offices. 
        The system allows the users to check their clearance status as to whether they are in any way obligated to the university, 
       fill and submit their clearance form, and obtain their clearance letter. 
       Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 


      </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h3>step 2</h3>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          
           <p><center>Online student clearance system is a process a student needs to complete before they leave university.
          They need clearance of all borrowed items from different offices. 
        The system allows the users to check their clearance status as to whether they are in any way obligated to the university, 
       fill and submit their clearance form, and obtain their clearance letter. 
       Students has two status when they sick clearance: when they graduate or when they withdraw from the university.<center></p> 


      </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h3>step 3</h3>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        The third is us the student requests check and manipulate the requests
         the first step is login to user account if only you are a user to this system
         They need clearance of all borrowed items from different offices. 
        The system allows the users to check their clearance status as to whether they are in any way obligated to the university, 
       fill and submit their clearance form, and obtain their clearance letter. 
       Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 

      </div>
    </div>
  </div>
</div>
     </div>
     
     
     <!-- News jumbotron -->
     <div class="flex-container">
     
    <div class="second">
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        <img src="">
        <img src="Obasanjo.jpg" alt=""/>
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
<!--      <a href="#!" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
      </a>-->

      <h4 class="h4 mb-4">ONLINE EDUCATION SYSTEM</h4>

      <p class="font-weight-normal"> <p><center>Online student clearance system is a process a student needs to complete before they leave university.
          They need clearance of all borrowed items from different offices. 
        The system allows the users to check their clearance status as to whether they are in any way obligated to the university, 
       fill and submit their clearance form, and obtain their clearance letter. 
       Students has two status when they sick clearance: when they graduate or when they withdraw from the university.<center></p> 
.</p>
<!--      <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>-->

      <a class="btn btn-success">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->
     
     </div>
 
    
    <!-- Footer Elements -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</footer>
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
   </body>
</html>

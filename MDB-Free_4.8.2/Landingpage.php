<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
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
        <title>Landing page</title>
        
        
        <style>
            .amy{
                widith:300px;
                height:300px;
                background-color:gray;
                margin-left: 500px;
                margin-right: 500px;
                margin-top: 100px;
                background-image: ../MDB-Free_4.8.2 ("AAU-gates.jpg");
            } 
            
            
        </style>
    </head>
    <body>
        <center> <h3>Online Student Clearance System</h3></center>
        <div class="amy">
        <div class="d-flex justify-content-center">
            
            
         
            <button type="button" class="btn btn-info" onclick="toHome()">STUDENT</button>
            <button type="button" class="btn btn-info" onclick="toOffice()">OFFICE</button>
            
        </div>
        </div>

 <script>
            function toHome(){
                window.open("signup.php");
            }
            </script>
            
              <script>
            function toOffice(){
                window.open("officeloginpage.php")
            }
            </script>
            
            
                </body>
                
                
                
                <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</html>
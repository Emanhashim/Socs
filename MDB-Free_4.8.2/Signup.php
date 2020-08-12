<!DOCTYPE html>

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

    
   
       
<!--        <form action="../model/signupp.php" method="post">
            <input type="fullname" placeholder="fullname" name="fullname"/></br></br>
            <input type="age" placeholder="age" name="age"/></br></br>
            <input type="gender" placeholder="gender" name="gender"/></br></br>
            <input type="department" placeholder="department" name="department"/></br></br>
           <input type="program" placeholder="program" name="Program"/></br></br>
            <input type="registration_date" placeholder="registration_date" name="registration_date"/></br></br>
            <button> sign up </button>
        </form>-->
        
<style>    <!-- Default form register -->
.form-dark .font-small {
font-size: 0.8rem; }

.form-dark [type="radio"] + label,
.form-dark [type="checkbox"] + label {
font-size: 0.8rem; }

.form-dark [type="checkbox"] + label:before {
top: 2px;
width: 15px;
height: 15px; }

.form-dark .md-form label {
color: black; }

.form-dark input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #00C851;
-webkit-box-shadow: 0 1px 0 0 #00C851;
box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=text]:focus:not([readonly]) + label {
color: black; }

.form-dark input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #00C851;
-webkit-box-shadow: 0 1px 0 0 #00C851;
box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=password]:focus:not([readonly]) + label {
color: black; }

.form-dark input[type="checkbox"] + label:before {
content: '';
position: absolute;
top: 0;
left: 0;
width: 17px;
height: 17px;
z-index: 0;
border: 1.5px solid #fff;
border-radius: 1px;
margin-top: 2px;
-webkit-transition: 0.2s;
transition: 0.2s; }

.form-dark input[type="checkbox"]:checked + label:before {
top: -4px;
left: -3px;
width: 12px;
height: 22px;
border-style: solid;
border-width: 2px;
border-color: transparent #00c851 #00c851 transparent;
-webkit-transform: rotate(40deg);
-ms-transform: rotate(40deg);
transform: rotate(40deg);
-webkit-backface-visibility: hidden;
-webkit-transform-origin: 100% 100%;
-ms-transform-origin: 100% 100%;
transform-origin: 100% 100%; }

/*<!--Section: Live preview-->
<section class="form-dark">*/

</style>
    </head>
    <body>
<!--Form without header-->


<div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
<div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg'); width: 28rem;">
    <div class="text-black rgba-stylish-strong py-5 px-5 z-depth-4">

        <!--Header-->
        <form action="../model/modelsignup.php" method="post">
        <div class="text-center">
            <h3 class="white-text mb-5 mt-4 font-weight-bold"><strong>SIGN</strong> <a class="green-text font-weight-bold"><strong> UP</strong></a></h3>
        </div>

        <!--Body-->        
        
        
        
        <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="fullname">
            <label for="Form-email5">Your full name</label>
        </div>
         <div class="md-form">
             <input type="number" id="Form-email5" class="form-control black-text" name="age">
            <label for="Form-email5">Age</label>
        </div>
         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="gender">
            <label for="Form-email5">Gender</label>
            <span class="ml-5">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="gender" value="Female" checked>
               <label class="custom-control-label" for="defaultChecked">Female</label>
                </span>
            <input type="radio" class="custom-control-input" id="defaultunChecked" name="gender" value="Female" checked>
               <label class="custom-control-label" for="defaultunChecked">Male</label>
                </span>
        </div>
         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="department">
            <label for="Form-email5">Department</label>
        </div>
         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="program">
            <label for="Form-email5">Program</label>
        </div>
         <div class="md-form">
            <input type="date" id="Form-email5" class="form-control black-text" name="registration_date">
            <label for="Form-email5">Registration Date</label>
        </div>
        
        
<!--         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="phone">
            <label for="Form-email5">Phone</label>
        </div>-->
         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="username">
            <label for="Form-email5">username</label>
        </div>
        
         <div class="md-form">
            <input type="text" id="Form-email5" class="form-control black-text" name="password">
            <label for="Form-email5">Password</label>
        </div>
         <div class="md-form">
             <input type="number" id="Form-email5" class="form-control black-text" name="phonenumber">
            <label for="Form-email5">Phonenumber</label>
        </div>
         <div class="md-form">
            <input type="date" id="Form-email5" class="form-control black-text" name="signupdate">
            <label for="Form-email5">signupdate</label>
        </div>
        
         
        
        



        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
                <button  class="btn btn-success btn-block btn-rounded z-depth-1">Sign up</button>
            </div>
            
            
          
            
            <h4>Already a Member?
                <a href="./loginpage.php">LOGIN</a>
            </h4>
                
            
            <!--Grid column-->
        </div>
        </form>
    </div>
</div>
                </div>
        
    </div>
</div>
<!--/Form without header-->

</section>
<!--Section: Live preview-->

</form>
<!-- Default form register -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>

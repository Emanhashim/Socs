


<?php


include_once '../controller/dblogin.php';
if(isset($_POST['fullname']) and isset($_POST['age'])and isset($_POST['gender'])and isset($_POST['department'])and isset($_POST['program'])and isset($_POST['registration_date']) 
     and isset($_POST['username']) and isset($_POST['password'])and isset($_POST['phonenumber'])and isset($_POST['signupdate'])){
   // to show what is filled for the user like js alert msg
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
     $gender=$_POST['gender'];
    $department=$_POST['department'];
     $program=$_POST['program'];
    $registration_date=$_POST['registration_date'];
    $username=$_POST['username'];
     $password=$_POST['password'];
     
      $phonenumber=$_POST['phonenumber'];
     $signupdate=$_POST['signupdate'];
     //$id=$_POST['id'];
    
    
    
   $db=new dblogin();
    $result=$db->signupp($fullname,$age,$gender,$department,$program,$registration_date,$username,$password,$phonenumber,$signupdate);
       if($result=='1'){
           //$db->signuplog($student_id,$username,$password);
//       echo 'succesfully inserted';
  header("Location: /Student_online_Clerance_System/MDB-Free_4.8.2/loginpage.php");
        
   }else{
       echo 'please try again';
 }
    
    
  

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//}
?>

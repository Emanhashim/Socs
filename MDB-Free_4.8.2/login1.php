<?php

//capture and show me code
include_once '../controller/dblogin.php';
if(isset($_POST['user']) and isset($_POST['pass'])){
    //to show what is filled for the user like js alert msg
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    $db=new dblogin();
    $result=$db->userlogin($_POST['user'], $_POST['pass']);
    
    //might not work
    
//    if($result=='1'){
//         $user=$db->getprivelage($_POST('username'));
//         $session_start();
//         $privelage=$user['privelage'];
//         $_SESSION['privelage']=$privelage;
//         
//         
    
    
    if($result=='1'){
        echo 'u r in';
        header("Location: /Student_online_Clerance_System/MDB-Free_4.8.2/homepage.php");
        
    }else{
        echo 'incorrect username and password';
    }
    
    
//    echo $user;
//    echo $pass;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


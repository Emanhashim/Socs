<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dblogin
 *
 * @author EMAN HASHIM
 */
class dblogin {
    private $conn;
    function __construct() {
        include_once 'dbconnect.php';
        $db=new dbconnect();
        $this->conn=$db->connect();
        
        
    }
    
    public function userlogin($user,$pass) {
        $stm= $this->conn->prepare("select * from student where username=? and password=?");
        $stm->bind_param("ss",$user,$pass);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
            return 1;
           
        }else{
            return 2;
            
        }
       
        
        
    }
     public function update($user,$new) {
        $stm= $this->conn->prepare("UPDATE login
SET password=? WHERE username=?;");
        $stm->bind_param("ss",$new,$user);
        //$stm->execute();
        if($stm->execute()){
            return 1;
        }else{
            return 2;
            
        }
       
        
        
    }
    public function Approved($requestid,$officeid,$status,$approvedate,$rejectionreason){
      $stm= $this->conn->prepare("insert into status(requestid,officeid,status,approvedate,rejectionreason) values(?,?,?,?,?);");
         $stm->bind_param("sssss",$requestid,$officeid,$status,$approvedate,$rejectionreason);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }    
    }
    public function getofficeid($user){
         $stm=  $this->conn->prepare("select * from office where username=?");
    $stm->bind_param("s", $user);
    $stm->execute();
    //this would return what is inside
    return $stm->get_result()->fetch_assoc();
        
    }






//     public function signup($FullName,$Age,$Phone,$Email){
//         $stm= $this->conn->prepare("insert into signup(FullName,Age,Phone,Email) values(?,?,?,?);");
//         $stm->bind_param("ssss",$FullName,$Age,$Phone,$Email);
//         if($stm->execute()){
//             return 1;
//             
//         }else{
//             return 2;
//         }
//            
//        }


 
     public function requestsender($select,$date,$reason){
         $stm= $this->conn->prepare("insert into request(request_type,Date,reason) values(?,?,?);");
         $stm->bind_param("sss",$select,$date,$reason);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
            
        }


public function getprivelage($user){
    $stm=  $this->conn->prepare("select * from login where username=?");
    $stm->bind_param("s", $user);
    $stm->execute();
    //this would return what is inside
    return $stm->get_result()->fetch_assoc();
}
    


    
 public function signupp($fullname,$age,$gender,$department,$program,$registration_date ,$username,$password,$phonenumber,$signupdate){
         $stm= $this->conn->prepare("insert into student(fullname,age,gender,department,program,registration_date,username,password,phonenumber,signupdate) values(?,?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("ssssssssss",$fullname,$age,$gender,$department,$program,$registration_date,$username,$password,$phonenumber,$signupdate);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
            
        }



// public function signuplog($student_id ,$username,$password){
//         $stm= $this->conn->prepare("insert into login(student_id,username,password,privelage) values(?,?,?,'student');");
//         $stm->bind_param("sss",$student_id,$username,$password);
//         if($stm->execute()){
//             return 1;
//             
//         }else{
//             return 2;
//         }
//            
//        }

        public function officerlogin($user,$pass) {
        $stm= $this->conn->prepare("select * from office where username=? and password=?");
        $stm->bind_param("ss",$user,$pass);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
            return 1;
           
        }else{
            return 2;
            
        
}
}



        }   
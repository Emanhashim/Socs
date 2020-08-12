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
    </head>
    <body>
        
        <h1>homepage</h1>
        <?php
        session_start();
        $privelage=$_SESSION['privelage'];
        
        if($privelage=='Admin'){
            
        
            ?>
        <button>Admin</button>
         
        
        
        <?php }else{?>
            
        
       
        <button>Student</button>
        
       <?php
        }
        
        ?>
    </body>
</html>

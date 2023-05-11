<?php 
 $server = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "userlogin";
 $con=new mysqli($server,$userName,$password,$dbName);
 if(!$con){
    echo"connection not successfull";
 }

?>
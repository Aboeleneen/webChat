<?php
   include 'contact.php';
   

  if($_SERVER['REQUEST_METHOD']== "POST"){
   $username=$_POST['Username'];
   $email=$_POST['email'];
   $pass=$_POST['password'];

   $sql= "INSERT INTO signup(username,email,password) 
               VALUES ('$username','$email','$pass')" ;

   $con ->exec($sql);

   header("Location:index.php");
    }




?>
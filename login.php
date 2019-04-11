<?php
 session_start();

 include 'contact.php' ;
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $username=$_POST['Username'];
  $password=$_POST['password'];
   	$stmt = $con  ->prepare("SELECT * FROM signup WHERE username= ? AND password= ? LIMIT 1");
    $stmt ->execute(array($username , $password));
    $count= $stmt -> rowCount();
   
    if($count <= 0)
    { 

  	header("Location:error.php");
  }
  else { 
  	 $_SESSION['username'] = $username;
  	$row = $stmt->fetch(PDO::FETCH_ASSOC);
      $_SESSION['id'] = $row['id'];


  	header("Location:users.php");
  }

   }


?>
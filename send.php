<?php
  session_start();
  include 'contact.php';

  $message=$_POST['message'];
  $name=$_SESSION['username'];
  $fromID=$_SESSION['id'];
  $toID=$_SESSION['to'];
  $sql="INSERT INTO posts(msg,name,toID,fromID) VALUES ('$message','$name','$toID','$fromID')";
  $con->exec($sql);

  header("Location:home.php");
?>
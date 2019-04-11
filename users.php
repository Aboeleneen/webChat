<!DOCTYPE html>
<html>
<head>
	<title>Users2</title>
	<link rel="stylesheet" type="text/css" href="users.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">

    	<?php 
    	session_start();
    	include 'contact.php';
    	$sql = $con -> prepare("SELECT * FROM signup ");
    	$sql->execute();
    	$count= $sql -> rowCount();
    	if($count > 0 ){
    		 while($row = $sql->fetch(PDO::FETCH_ASSOC)){ 
    		 	if($_SESSION['id'] !=$row['id']) {?>
    			<div class="user">
    		       <div class="photo"> <a href="home.php?id=<?php echo $row['id'] ?>"><img src="images/chat.jpg"></a></div>
    		       <div class="info"> <?php  echo $row['username'] ;?>
    		        <a class="fa fa-user-circle-o" style="font-size:20px;color:red">  </a>
    		         </div>
    	        </div> <?php }
    		}
    	} ?>
    	
    </div>
</body>
</html>
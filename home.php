<?php
 session_start();
   $color=array("AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","Darkorange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen");
 include 'contact.php';
  if(isset($_GET['id'])){
  $_SESSION['to']= $_GET['id'];}


  $toID =  $_SESSION['to'];
  $fromID = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
   
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>







   
    <div class="user1">
    	<img src="images/chat.jpg">
    	<?php 
    	$sql=$con->prepare("SELECT * FROM signup WHERE id = ? LIMIT 1");
    	$sql->execute(array($fromID));
         $row = $sql->fetch(PDO::FETCH_ASSOC);?>
    	<h1> <?php echo $row['username'] ?></h1>
    </div>
    <div class="user2">
    	<img src="images/chat.jpg">
    	<?php 
    	$sql=$con->prepare("SELECT * FROM signup WHERE id = ? LIMIT 1");
    	$sql->execute(array($toID));
         $row = $sql->fetch(PDO::FETCH_ASSOC);?>
    	<h1> <?php echo $row['username'] ?></h1>
    </div>
 
	<div class="chatbox">
		 <div class="chatlogs">

		 	 <?php  
			 $sql = $con->prepare("SELECT * FROM posts WHERE (toID=$toID AND fromID=$fromID) OR (toID=$fromID AND fromID=$toID) ");
             $sql->execute();
             $count= $sql -> rowCount();
			if($count > 0 ){
				  while($row = $sql->fetch(PDO::FETCH_ASSOC)){ ?>
				  	<div class="chat <?php if($_SESSION['id']==$row['fromID'])   echo 'self';  else echo 'friend'; ?> "> 
				  	
				        <div class="user-photo"> <img src="images/2.jpg"></div> 
				        <p class="chat-message">
		 			         <?php echo $row['msg'] ?>
		 		        </p>
				    </div>  <?php

				} 
			}
			 ?>
		
		  </div>
		<form class="chat-form" action="send.php" method="post" >
			<textarea name="message" placeholder="Type to send message.........." ></textarea>
			<button type="submit">send</button> 
			
		</form> 
	</div>


 

</body>
</html>
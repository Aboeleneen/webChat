<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--
  <div id="main">



  	   <div id="head">
  	   	  <h2>Group Chat</h2>
  	   </div>
  	  
  	  <div id="info">

  	  	
         
          <form action="login.php" method="post">
          	 <label><b>Username</b></label>
          	 <input type="text" name="Username" placeholder="User Name"> <br></br>
          	 <label><b>Password</b></label>
          	 <input type="password" name="password" placeholder="Password"> <br></br>
             <button type="submit" >submit</button>
          </form>

          <form action="signup.php" method="post">
          	 <h2>don't have an account sign up here</h2>
          	 <label>Username:</label>
          	 <input type="text" name="Username" placeholder="User Name"> <br>
          	 <br>
          	 <label>Email Add:</label>
          	 <input type="text" name="email" placeholder="Email"> <br>
          	 <br>
          	 <label>Password:</label>
          	 <input type="text" name="password" placeholder="Password"> <br>
          	 <br>
          	 <button type="submit">signup</button>
          </form>


  	  </div>
  </div>  -->

   <div class="card" id="card">
        <div class="front">
            <header>
                <img src="images/chat.jpg">
            </header>
            <form action="login.php" method="post">

			         <div class="form-group">
			             <label for="Username">Email:</label>
			             <input type="text" class="form-control" id="Username"  placeholder="Enter email" name="Username">
			        </div>

			         <div class="form-group">
			             <label for="password">Password:</label>
			             <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			         </div>

			         <div class="checkbox">
			             <label><input type="checkbox" name="remember"> Remember me</label>
			         </div>

			        <button type="submit" class="btn btn-primary btn-block">log in </button>
          </form>
         <br>
           <button onclick="document.getElementById('card').style.cssText = ' transform: rotateY(180deg) ' ;"  class="btn btn-danger btn-block" >Sign up</button>
      
        </div>

   

        <div class="back">
        	<header>
                <img src="images/chat.jpg">
            </header>
              <form action="signup.php" method="post">
          	 
          	       <div class="form-group">
			             <label for="Username">Username:</label>
			             <input type="text" class="form-control" id="Username"  placeholder="Enter email" name="Username">
			        </div>
                     

                     <div class="form-group">
			             <label for="email">Email:</label>
			             <input type="text" class="form-control" id="email"  placeholder="Enter email" name="email">
			        </div>
         
          	
          	         <div class="form-group">
			             <label for="password">Password:</label>
			             <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			         </div>
          	
          	 <button type="submit" class="btn btn-primary btn-block" >sign up</button>
          </form>

               <button class="btn btn-danger btn-block"  onclick="document.getElementById('card').style.cssText = ' transform: rotateY(360deg) ' ;">login</button>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Uniq Tour</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="login-popup">
		<div class="box">
			 <div class="img-area">
				 <div class="img">
				 </div>
			 </div>
			 <div class="form">
				 <div class="close">&times;</div>
				 <h1>Log In</h1>
				 <form action="./proses_login.php" method="POST">
					 <div class="form-group">
						 <input type="text" name="email" placeholder="Email" class="form-control">
					 </div>
					 <div class="form-group">
						 <input type="text" name="username" placeholder="username" class="form-control">
					 </div>
					 <div class="form-group">
						 <input type="password" name="password" placeholder="Password" class="form-control">
					 </div>
					 <div class="form-group">
						 <label><input type="checkbox">
							 Remember Me
						 </label>
					 </div>

					 <button type="submit" class="login" style="margin-bottom: 5%;" onclick="return confirm('Are you sure to log in?')">Login</button>
					 
					 <p style="margin-left: 10%;">You haven't had account?<a href="signup.php">sign up</a></p>
					
				 </form>
			 </div>
		</div>
   </div>
 
 <script src="login.js"></script>
</body>
</html>
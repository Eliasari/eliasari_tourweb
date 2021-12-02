<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Uniq Tour</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <div class="signup-popup">
        <div class="box">
             <div class="img-area">
                 <div class="img">
                 </div>
             </div>
             <div class="form">
                 <div class="close">&times;</div>
                 <h1>Sign Up Free</h1>
                 <form action="proses_signup_admin.php" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name">
                    </div>
                     <div class="form-group">
                         <input type="text" placeholder="Email" class="form-control" name="email">
                     </div>
                     <div class="form-group">
                         <input type="text" placeholder="username" class="form-control" name="username">
                     </div>
                     <div class="form-group">
                         <input type="password" placeholder="Password" class="form-control" name="password">
                     </div>
                     <div class="form-group">
                         <label><input type="checkbox">
                             Remember Me
                         </label>
                     </div>
                     <button type="submit" class="btn" style="margin-bottom: 5%;">Sign Up</button>

                     <p style="margin-left: 10%;">Do You want sign up as user?<a href="signup.php">Signup</a></p>
                     <p style="margin-left: 10%;">You already has an account?<a href="login.php">login</a></p>
                 </form>
             </div>
        </div>
   </div>
 
 <script src="signup.js"></script>

</body>
</html>
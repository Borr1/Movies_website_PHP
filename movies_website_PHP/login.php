<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['userEmail'];
		$password = $_POST['userPassword'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where email = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: projet.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<HTml>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylelog.css">
        <title>My website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      
    </head>
    
    <body  >
      
    <div class="navbar">
            <div class="container">
                <div class="logo"><h1 class="logo">Tea$erS</h1></div>         
</div>
</div>
<div class="main">
                       <div class="sidebar">
            <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
        </div>

                    
          <div class="wrapper">
            <div class="inner-warpper text-center">
              <h2 class="title">Login</h2>
              <form action="" method="POST" id="formvalidate" name="f">
                <div class="input-group">
                  <label class="palceholder" for="userEmail">Your Email</label>
                  <input class="form-control" name="userEmail" id="userEmail" type="text" placeholder="" />
                  <span class="lighting"></span>
                </div>
                <div class="input-group">
                  <label class="palceholder" for="userPassword">Password</label>
                  <input class="form-control" name="userPassword" id="userPassword" type="password" placeholder="" />
                  <span class="lighting"></span>
                </div>

          
                <button type="submit" id="login">Login</button>
                <div class="clearfix supporter">
                  <div class="pull-left remember-me">
                    <input id="rememberMe" type="checkbox">
                    <label for="rememberMe">Remember Me</label>
                  </div>
                  <a class="forgot pull-right" href="#">Forgot Password?</a>
                </div>
              </form>
            </div>
            <div class="signup-wrapper text-center">
              <a href="sign up.php">Don't have an accout? <span class="text-primary">Create One</span></a>
            </div>
          </div>
</div>
    <script src="../app.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./scriptlog.js"></script> 

  </body>
</html>
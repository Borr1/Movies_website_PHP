<?php
session_start();
include('connection.php');
include('function.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    $e=$_POST['userEmail'];
    $p=$_POST['userPassword'];
    $n=$_POST['userName'];
    $b=$_POST['date'];
    $s=$_POST['sex'];

    if(!empty($e) && !empty($p) && !empty($n) && !empty($b) && !empty($s)){
        $query = "insert into users(name,email,password,birthday,sex) values ('$n','$e','$p','$b','$s')";
        mysqli_query($con,$query);
        header("location: login.php");
        die;
    }else{
        echo "empty data";  
    }
}

?>

<!DOCTYPE html>
<HTml>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesig.css?v=<?php echo time(); ?>">
        <title>My website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script  src="controle.js"></script> 
    </head>
    
    <body  >
    <div class="navbar">
            <div class="container">
                <div class="logo"><h1>Tea$erS</div>       
</div>
<div class="main">
          <div class="wrapper">
            <div class="inner-warpper text-center">
              <h2 class="title">Sign UP</h2>
              <form action="" id="formvalidate" name="f" method="POST" onSubmit="return Verif()">
              <div class="input-group">
                  <label class="palceholder" for="userName">User Name</label>
                  <input class="form-control" name="userName" id="userName" type="text" placeholder="" required />
                  <span class="lighting"></span>
                </div>  
                <div class="input-group">
                  <label class="palceholder" for="userEmail">Email</label>
                  <input class="form-control" name="userEmail" id="userEmail" type="email" placeholder="" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" />
                  <span class="lighting"></span>
                </div>
                <div class="input-group">
                  <label class="palceholder" for="userPassword">Password</label>
                  <input class="form-control" name="userPassword" id="userPassword" type="password" placeholder="" required />
                  <span class="lighting"></span>
                </div>
                <div class="row">
                  <div class="col-25">
                  <label for="">Bithday</label>
                  </div>
                  <div class="input-group">
                  <input id="date" type="date" name="date" max="2099-01-01" required>
                  </div>
                </div>

                <div class="radio_option">
                  <input type="radio" name="sex" id="rd1" value="M">
                  <label for="rd1">Male</label>
                  <input type="radio" name="sex" id="rd2" value="F">
                  <label for="rd2">Female</label>
                  </div>
                <div class="terms">
                  <input type="checkbox" id="cb1">
    			<label for="cb1">I agree with terms and conditions</label>
          </div>
                <button type="submit" id="login">Sign up</button>
              </form>
            </div>
            <div class="signup-wrapper text-center">
              <a href="login.php">Already have an account? <span class="text-primary">Login Here</span></a>
            </div>
          </div>
        <div class="sidebar">
            <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
        </div>
</div>
    <script src="../app.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="scriptsig.js"></script> 

  </body>
</html>
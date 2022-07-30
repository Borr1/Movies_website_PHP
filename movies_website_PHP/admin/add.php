<html>
<head>
    <?php
    error_reporting(0);
        include ('connection.php');
    $name=$_POST('film');
    $sql ="INSERT INTO FILMS values('film')";
    if($_POST('submit')){
        if(mysqli_query($conn,$sql)){
            echo"DATA ADDED SUCCESSFULLY";
            }
            else
            {
                echo"Something went wrong";
            }
        }
    ?>
</head>
<body>
</body>
<form>
    Name:<input type="text" name"film">
<input type="submit" name="submit" value="Send Info">
</form>
</body>
</html>
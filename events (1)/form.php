<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION FORM</title>
    <link rel="stylesheet" type="text/css" href="styler.css">
</head>
<body>
    <h2>REGISTRATION FORM</h2><br>
    <div class="login">
    <form id="login" method="post" action="form.php">
        <label><b>Username
        </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>
        <input type="submit" name="bb" id="log" value="register">
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        
    </form>
    <?php
    $a=$_POST["bb"];
    if($a){
        if(empty($_POST["Uname"]) && empty($_POST["Pass"])){
            echo "Fields are empty";    
      
        
        }
        else{
           
        $host="localhost";
        $username="root";
        $password="";
        $db="reg";
        $var=mysqli_connect($host,$username,$password,$db);
        
        $a=$_POST["Uname"];
        $b=$_POST["Pass"];
        $querry="INSERT INTO regi (username , password) VALUES ('$a','$b');";
        mysqli_query($var,$querry);
        header("location:login.php");
        }
    }
    ?>
</div>
</body>
</html>
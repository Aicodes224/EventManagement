<!DOCTYPE html>
<html>
<head>
    <title>login Form</title>
    <link rel="stylesheet" type="text/css" href="stylel.css">
</head>
<body>
    <h2>LOGIN PAGE</h2><br>
    <div class="login">
    <form id="login" method="post" action="login.php">
        <label><b>Username
        </b>
        </label>
        <input type="text" name="Un" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="Pas" id="Pass" placeholder="Password">
        <br><br>
        <input type="submit" name="lo" id="log" value="login">
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
         
    </form>
    <?php
    $z=$_POST["lo"];
    if($z){
        if(empty($_POST["Un"]) || empty($_POST["Pas"])){
            echo "Fields are empty";    
       }
        
    
        else{
            
                $host="localhost";
                $username="root";
                $password="";
                $db="reg";
                $var=mysqli_connect($host,$username,$password,$db);
            $a=$_POST['Un'];
            $b=$_POST['Pas'];
            $w="SELECT * FROM regi WHERE username='$a' && password='$b';";
            $login=mysqli_query($var,$w);
            //$p=mysqli_num_rows($login);
            if($login){
                while($r=mysqli_fetch_assoc($login)){
                if($a==$r["username"] && $b==$r["password"]){
                    header("location:index copy.html");

                }
                else{
                    echo "not found";
                }
            }
        }
            
        }
}
    
    ?>
</div>
</body>
</html>
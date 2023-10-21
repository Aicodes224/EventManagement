<html>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $host="localhost";
        $username="root";
        $password="";
        $db="reg";
        $var=mysqli_connect($host,$username,$password,$db);
        if($var){
            echo "connection established <br>";
        }
        else{
            die("fail");
        }
        $a=$_POST['Un'];
        $b=$_POST['Pas'];
        $w="SELECT * FROM regi WHERE username='$a' && password='$b';";
        $login=mysqli_query($var,$w);
        if($r=mysqli_fetch_assoc($login)){
            echo "found <br>";
        }
        else{
            echo "not found";
        }
    }
    else{
        echo "login failed";
        echo "<br>";
    }
    ?>
</body>
</html>
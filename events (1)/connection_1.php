<html>
    <body>
        <?php
        $host="localhost";
        $username="root";
        $password="";
        $db="reg";
        $var=mysqli_connect($host,$username,$password,$db);
        if($var){
            echo "connection established";
        }
        else{
              die("fail");
        }
        $a=$_POST["Uname"];
        $b=$_POST["Pass"];
        $querry="INSERT INTO regi (username , password) VALUES ('$a','$b');";
        $connect=mysqli_query($var,$querry);
        if($connect){
            echo "";
        }
        else{
            echo "log out";
        }

        ?>
</body>
    </html>
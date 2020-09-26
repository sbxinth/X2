<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
            <link rel="icon" href="https://www.mytcas.com/favicon.ico">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         
    <style>
        .lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
    </style>
</head>

<body>

<?php 

// echo '<center><div class="lds-dual-ring"></div>';
echo '<br><br><br><br><br><center><div class="spinner-border text-primary" role="status">
<span class="sr-only">Loading...</span>
</div>';
session_start();
        if(isset($_POST['F_username'])){
                  include("condb.php");
                  $username = $_POST['F_username'];
                  $password = $_POST['F_password'];
                  $md5pass = md5($password);
                  $_SESSION["username"] = $username;

                //   echo 'test <br>';
                //   echo $username .' & '. $password ;
                  $sql="SELECT * FROM Account
                  WHERE  username='".$username."' 
                  AND  password='".$md5pass."' ";
                  $result = mysqli_query($con,$sql);
				// echo $result;
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                    //   $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["firstname"];
                      $_SESSION["firstname"] = $row["firstname"];

                      $_SESSION["nameShow"]= $row["username"];
                    //   $_SESSION["level"] = $row["level"];
                    echo '<br><br><br><br><br><br>'.'Hi ! '.$_SESSION["name"];
                    // Header("Location: index.php"); //user & password incorrect back to login again
                    echo '<meta http-equiv="refresh" content="2; url=index.php">';

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{
            echo 'E YANG';

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>
</body>
</html>
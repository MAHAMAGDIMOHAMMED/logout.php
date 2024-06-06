<!-- 
<?php
session_start();
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['pwd'];}
    if (!empty($email) && !empty ($password)){
$expire_date = time()+(86400 *30 );
setcookie('user_data', $email ,$expire_date , '/');
  

        echo $msg = "WELCOME" . $_COOKIE ['user_data'];
        
    } 
    ?>  -->



<?php
 $user_data="";
 $expire_date = time()-(86400 * 30);
 setcookie('user_data' , $_COOKIE['user_data'], $expire_date , '/');
 
 echo "you’r logged out";
 
 header("refresh:5; URL = ./task8.php");

 ?>


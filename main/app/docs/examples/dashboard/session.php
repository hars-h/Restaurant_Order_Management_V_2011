<?php
   include('config.php');

   session_start();
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"select username from users where username = 'username' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   
?>


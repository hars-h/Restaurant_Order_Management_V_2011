<?php

   include("../conn.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      session_start();
      $sql = "SELECT * FROM app_user WHERE USER_NAME = '$username' and PASSWD = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
 
         $_SESSION['username'] = "$username";
          $_SESSION['password'] = "$password";
    
           $_SESSION['login'] = true;
         header('location: dashboardhome.php');
      }else {
         echo  "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
<style type="text/css">
#background {
background: url(img/bg1.jpg) no-repeat 50% 50% fixed;
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}
</style>
      
   </head>
   
   <body id="background">
   
               
               <form action = "" method = "post" style="text-align: center;">
                 <table align="center" style="margin-top: 70px;"><tr><td><input type = "text" placeholder="username" name = "username" class = "box"/></td></tr>
                  <tr><td><input type = "password" name = "password" placeholder="password" class = "box" /></td></tr>
                  <tr><td align="center"><input type = "submit" value = " Submit "/></td></tr>
                  </table>
               </form>
               
   

   </body>
</html>

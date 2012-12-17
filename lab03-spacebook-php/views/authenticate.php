<!DOCTYPE html>
<html>
  <head>
    <title>Authenticate</title>
  </head>
  <body>
    <h1>Authentication</h1>    
    <p>
    <?php
       require_once('users.php');

       $username = $_POST['username'];
       $password = $_POST['password'];

       if (array_key_exists($username, $validUsers) && ($validUsers[$username] == $password))
       {
         echo "Welcome $username, <a href='home.html'>continue to next page...</a>";
       }
       else
       {
          echo "Sorry, <a href='login.html'>try again...</a>";
       }
    ?>
    </p>
  </body>
</html>
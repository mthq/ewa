<!DOCTYPE html>
<html>
  <head>
    <title>Authenticate</title>
  </head>
  <body>
    <h1>Authentication</h1>    
    <p>
    <?php
       $username = $_POST['username'];
       $password = $_POST['password'];

       echo "Welcome $username, <a href='home.html'>continue to next page...</a>";
    ?>
    </p>
  </body>
</html>
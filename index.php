<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enkel php app</title>
  </head>
  <body>
    <?php
    echo "kom hit";
      // PHP Data Objects(PDO) Sample Code:
      try {
          $con = mysqli_init(); 
          mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); 
          mysqli_real_connect($conn, "steinang.mysql.database.azure.com", "steinang", "247jeykS", "", 3306, MYSQLI_CLIENT_SSL);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
          print("Error connecting to SQL Server.");
          die(print_r($e));
      }
    ?>
  </body>
</html>

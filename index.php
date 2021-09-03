<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enkel php app</title>
  </head>
  <body>
    <?php
      // PHP Data Objects(PDO) Sample Code:
      try {
          $conn = new PDO("sqlsrv:server = tcp:steinang.database.windows.net,1433; Database = Bibliotek", "steinang", "{your_password_here}");
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
          print("Error connecting to SQL Server.");
          die(print_r($e));
      }
    ?>
  </body>
</html>

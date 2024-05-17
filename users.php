<?php
include "./dbconnection.php";

$stmt= $conn->prepare("SELECT * FROM users");
$stmt->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User name</th>
        <th>Password</th>
        
      </tr>
    </thead>

    <tbody>

      <?php
      foreach($stmt->fetchAll() as $key){
        echo "<tr>
        <td>{$key['user_name']}</td>
        <td>{$key['password']}</td>
        
        </tr>
        ";
      }
      ?>
      
    </tbody>
  </table>
</div>

</body>
</html>

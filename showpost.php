<?php
include "./dbconnection.php";

$id = $_GET['id'];

$data = $conn->prepare("SELECT * from `posts` Where `post_id`= $id");

$data->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>View Post Info.</h2>
  <div class="card">
    <div class="card-body">
    <?php
        foreach($data->fetchAll() as $key){
        echo $key['title']."<br>";
        echo $key['content']; 
    }
    ?>
    </div>
    <a href="./posts.php" class="btn btn-primary">Back</a>
   
  </div>
</div>

</body>
</html>

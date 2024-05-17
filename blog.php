<?php
include "./dbconnection.php";

$stmt=$conn->prepare("SELECT * from posts");
$stmt->execute();


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Blog Page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2> :: Simple Blog_DB system :: </h2>
  <div class="container"><a class="btn btn-primary" href="./adminlogin.php">Manage Posts</a>
  <?div>
 <hr>

  <?php foreach ($stmt->fetchAll() as $key ) { ?>
  <div class="alert alert-info">
    <strong><?php echo $key['title']."<br>"; ?></strong>
  </div>
  <div class="alert alert-light">
    <strong><?php echo $key['content']."<br>"; ?></strong> 
  </div>

  <hr>
  <hr>
 <?php } ?>
</div>

</body>
</html>

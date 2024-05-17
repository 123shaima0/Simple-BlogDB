<?php
include "./dbconnection.php";

$stmt=$conn->prepare("SELECT * from posts");
$stmt->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h3> Simple Blog System </h3>
  <div class="row">
  <a class="btn btn-primary" href="./insertpost.php">Create Post</a>
  <?div>
 <hr>

           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Action</th>
        

      </tr>
    </thead>

    <tbody>

      <?php
      foreach($stmt->fetchAll() as $key){
        echo "<tr>
        <td>{$key['title']}</td>
        <td>{$key['content']}</td>
        <td>{$key['created_at']}</td>
        <td>
        <a class='btn btn-primary' href='./showpost.php?id={$key['post_id']}'>View </a>
        <a class='btn btn-success' href='./editpost.php?id={$key['post_id']}'>Edit </a>
        <a class='btn btn-danger' href='./deletepost.php?id={$key['post_id']}'> Delete </a>
        </td>
        </tr>
        ";
      }
      ?>
      
    </tbody>
  </table>
</div>

</body>
</html>

<?php
include"./dbconnection.php";

$id=$_GET['id'];
if(isset($_POST['edit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];

    $sql = "UPDATE posts
    SET title='$title', content='$content'
    WHERE post_id=$id";

    $stmt = $conn->prepare($sql);
    
    $stmt->execute();

    echo "Post have been Updated Successfully";
    header("Refresh:0 ;URL=posts.php");

    
}
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit the post</h2>
  <form class="form-horizontal" action="<?php '_PHP_SELF' ;?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Post Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title"  name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="content">Post Content</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="content"  name="content">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="edit">Edit</button>
        
        <a href="./posts.php" class="btn btn-primary" name="back">Back</a>

      </div>
    </div>
  </form>
</div>

</body>
</html>

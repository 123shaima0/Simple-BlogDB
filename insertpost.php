<?php
include"./dbconnection.php";


if(isset($_POST['add'])){
      
      $title = $_POST['title'];
      $content = $_POST['content'];
    
     
    $sql = "INSERT INTO `posts`(`title`, `content`) VALUES ('$title', '$content')";
    
    $stmt = $conn->prepare($sql);
    $stmt-> execute();

    echo "New Post have been Created Successfully";
    header("Refresh:0; URL=posts.php");

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert New Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Insert new post</h2>
  <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
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
        <button type="submit" class="btn btn-default" name="add">Add</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

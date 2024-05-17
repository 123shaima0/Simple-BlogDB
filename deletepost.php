<?php
include "./dbconnection.php";

$id=$_GET['id'];

$sql="DELETE FROM posts WHERE post_id= $id";

$conn->exec($sql);

echo "Post Deleted Successfully...";
header("Refresh:0; URL=posts.php");

?>
<?php
require('../includes/db.php');
mysqli_select_db($db, 'portfolio');

$title = $_POST['title'];
$post = $_POST['post'];
$btn = $_POST['btn'];




$query = " INSERT INTO `posts` (`id`, `title`, `paragraph`, `btn`)
VALUES (NULL, '$title', '$post', 'View Project')";

mysqli_query($db,$query);
echo "<script>window.location.href='create_post.php';</script>";
exit;

?>
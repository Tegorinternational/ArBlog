<?php
require('../includes/db.php');

$sql = "SELECT * FROM `posts` $result " ;
$runPQ=mysqli_query($db,$sql);
$post=mysqli_fetch_assoc($runPQ);

if(isset($_GET['page'])){
   $page=$_GET['page'];
 };
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <title></title>
</head>

<body>




<header>
 


</header> 



 <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      
      
 <?php
  $runPQ=mysqli_query($db,$sql);
    while ($post=mysqli_fetch_assoc($runPQ)){
 ?>
      <div class="mx-auto border border-black rounded-lg w-full px-1 py-1 flex flex-wrap mb-4">
        <div class="mr-2 w-1/5">
          <img class="bg-gray-300 h-10 w-20 rounded text-left" src="" alt="A">
          <a href="posts_del.php?id=<?php echo $post["id"]; ?>"><?=$post['id']?>Delete</a>
        </div>
        <div class="w-3/5">
          <h2 class="font-medium text-base text-black"><?=$post['title']?></h2>
          <p class="text-sm text-gray-600"><?=$post['paragraph']?></p>
          <p class="text-sm text-gray-400">Created at: 12-12-2023</p>
        </div>
      </div>
      
      
  <?php
}
?>
    </div>
  </section>



</body>

</html>
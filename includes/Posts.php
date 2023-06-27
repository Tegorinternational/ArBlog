<?php
require('db.php');
$sql = "SELECT * FROM `posts` $result " ;
$runPQ=mysqli_query($db,$sql);
$post=mysqli_fetch_assoc($runPQ);

if(isset($_GET['page'])){
   $page=$_GET['page'];
 };
 
 
?>
<section class="py-20 px-3 ">
 <?php
  $runPQ=mysqli_query($db,$sql);
    while ($post=mysqli_fetch_assoc($runPQ)){
 ?>
  <div class="flex justify-center pb-20">
  <div class="rounded-lg shadow-2xl bg-white max-w-sm">
    <a data-mdb-ripple="true" data-mdb-ripple-color="light">
      <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
    </a>
    <div class="p-6">
      <h5 class="text-gray-900 text-xl font-medium mb-2"><?=$post['title']?></h5>
      <p class="text-gray-700 text-base mb-4">
        <?=$post['paragraph']?>
        
      </p>
      <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" onclick="window.location.href = 'includes/Blog.php?id=<?=$post['id']?>';"><?=$post['btn']?></button>
    </div>
  </div>
  </div>
  <?php
}
?>
  
</section>
<?php
require ('db.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>Tegor International</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <!--favicon--><link rel = "icon" href ="https://1.bp.blogspot.com/-Xbf1WMoAxhg/YSTcIjdwngI/AAAAAAAAAp4/wblgeVjG3s4bF3ymkMYDcFJMhNP25EOVgCLcBGAsYHQ/s0/20210824_171449.png" type = "image/x-icon"> </link>
</head>

<body>

<?php
include('header.php');
$post_id=$_GET['id'];
$postQuery="SELECT * FROM posts WHERE id=$post_id";
$runPQ=mysqli_query($db,$postQuery);
$post=mysqli_fetch_assoc($runPQ);
?>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 pb-20 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?=$post['title']?></h1>
      <p class="mb-8 leading-relaxed"><?=$post['paragraph']?></p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Like</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Share</button>
      </div>
    </div>
  </div>
</section>


</body>

</html>

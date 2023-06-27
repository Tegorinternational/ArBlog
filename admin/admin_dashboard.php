<?php
  session_start();
  if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: admin_login_index.html");
    exit;
  }
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https:cdn.tailwindcss.com"></script>
  <title>Admin Dashboard</title>
</head>

<body>

<header class="w-full mx-auto px-6 bg-gray-100 py-2 flex flex-row">
  <h2 class="text-3xl text-left font-medium text-blue-600 my-auto">ArBlog</h2>
  
  <h2 class="my-auto flex ml-auto"><span class="mr-3 text-lg font-medium my-auto"><?php echo $_SESSION["username"]; ?></span><button onclick="window.location.href='admin_logout.php'" class="my-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-right h-4 w-4" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
  </svg></button></h2>
</header>

<section class="">
  <div class="container mx-auto text-lg my-5 pl-6">
    <ul>
    <li class="mb-3"><a href="create_post.php" class="px-5 py-1 text-center rounded-full bg-blue-600 text-white">Create New Post</a></li>
    <li class="mb-3"><a href="posts.php" class="px-5 py-1 text-center rounded-full bg-blue-600 text-white">All Posts</a></li>
    <li class="mb-3"><a href="User.php" class="px-5 py-1 text-center rounded-full bg-blue-600 text-white">Registered users</a></li>
  </ul>
  </div>
</section>


</body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex p-10">
    <form class="w-full mx-auto p-5 bg-gray-100 rounded-lg " action="admin_login.php" method="post">
      <h3 class="mx-auto text-center py-5 text-blue-600">ArBlog Admin LogIN</h3>
      <label for="username">Username:</label><br>
      <input class="rounded py-1 px-2 outline-none border border-blue-600 mt-1" type="text" id="username" name="username" placeholder="Username">
      <br><br>
      <label for="password">Password:</label><br>
      <input class="rounded py-1 px-2 outline-none border border-blue-600 mt-1" type="password" id="password" name="password" placeholder="Password">
      <br><br>
      <input class="mx-auto text-center py-1 bg-blue-600 text-white rounded w-full" type="submit" value="Submit">
    </form>
  </body>
</html>

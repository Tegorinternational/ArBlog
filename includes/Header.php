<?php
require('db.php');
$sql = "SELECT * FROM `profile`";
$runPQ = mysqli_query($db, $sql);
$profile = mysqli_fetch_assoc($runPQ);

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <header class="pb-32">

    <div class="fixed top-0 z-10 w-full mx-auto container px-6 py-2 backdrop-blur-sm bg-black/30 shadow">
      <h2 class="text-3xl font-bold uppercase text-blue-600"><?=$profile['header'] ?></h2>
    </div>

    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
      background-position: 50%;
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
      height: 350px;
      ">
      <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.75)">
        <div class="flex justify-center items-center h-full">
          <div class="text-center text-white px-6 md:px-12">
            
          <h1 class="text-4xl font-bold mt-0 mb-0 "><?=$profile['name'] ?></h1>
          <h3 class="text-lg font-light mb-8 uppercase"><?=$profile['title'] ?></h3>
          <button type="button"
            class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
            data-mdb-ripple="true" data-mdb-ripple-color="light">Learn more
          </button>
        </div>
      </div>
    </div>
  </div>
</header>

</body>
</html>
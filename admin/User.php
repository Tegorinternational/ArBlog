<?php
require('../includes/db.php');

$sql = "SELECT * FROM `contact` " ;
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
  
  
  <style>
    table{
      border: 1px solid black;
      border-collapse: collapse;
      width: 100%;
      text-align: left;
    }
    th{
      border: 1px solid black;
      padding-left: 10px;
    }
    td{
      border: 1px solid red;
      padding-left: 10px;
    }
  </style>
</head>

<body>


 
  <table>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Msg</th>
      <th>Del</th>
    </tr>
    
 <?php
  $i=0;
  $runPQ=mysqli_query($db,$sql);
    while ($post=mysqli_fetch_assoc($runPQ))
    {
 ?>
    
    <tr>
      <td><?=$post['id']?></td>
      <td><?=$post['Name']?></td>
      <td><?=$post['Email']?></td>
      <td><?=$post['Msg']?></td>
      <td><a href="usr_del.php?id=<?php echo $post["id"]; ?>">Delete</a></td>
    
    
 
  <?php
$i++;
}
?>
  </table>
 




 
  

</body>

</html>
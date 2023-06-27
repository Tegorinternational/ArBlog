<?php
require('../includes/db.php');
$sql = "DELETE FROM `posts` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    echo "<script>
            if (confirm('Ok button') == true) {
    window.location.href='posts.php';
  } else {
  }
        </script>";
       
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($db);
?>
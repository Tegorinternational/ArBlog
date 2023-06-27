<?php
require('../includes/db.php');
$sql = "DELETE FROM `contact` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    echo "<script>
            if (confirm('Ok button') == true) {
    window.location.href='User.php';
  } else {

  }
        </script>";
       
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($db);
?>
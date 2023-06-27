<?php
require('db.php');

mysqli_select_db($db, 'portfolio');

$name = $_POST['name'];
$gmail = $_POST['gmail'];
$msg = $_POST['msg'];


$query = " insert into contact (Name, Email, Msg)
values ('$name', '$gmail','$msg')";

mysqli_query($db,$query);
echo "<script>window.location.href='../index.php';</script>";
    exit;

?>
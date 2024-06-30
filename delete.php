<?php
include('db_connect.php');
$del="delete from register where id='".$_GET['id']."'";
mysqli_query($con,$del);
header('location:view.php');
?>
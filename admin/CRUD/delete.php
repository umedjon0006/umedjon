<?php

if(isset($_GET["id"]))  {
   require_once("db.php");
   $id = $_GET["id"];
   $query = "Delete from employers where id = $id";
   $result = mysqli_query($conn,$query);
}
header("Location: read.php");
?>
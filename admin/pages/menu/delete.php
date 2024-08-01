<?php

if(isset($_GET["id"]))  {
  
   $id = $_GET["id"];
   $query = "Delete from employers where id = $id";
   $result = mysqli_query($conn,$query);
}
?>
<a  href="index.php?page=2">Удалено</a>
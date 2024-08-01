<?php 
if (isset($_POST['employers'])){
    require_once("db.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $position = $_POST["position"];
    $image = $_POST["image"];
    $query = "UPDATE `employers`
    SET 
      `name` = '$name',
      `surname` = '$surname',
      `birthday` = '$birthday',
      `gender` = '$gender',
      `position` = '$position',
      `image` = '$image'
    WHERE `id` = '$id';";
    $result = mysqli_query($conn, $query);
    header("Location:read.php"); 
}
?>
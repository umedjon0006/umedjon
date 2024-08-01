<?php 
if (isset($_POST["employer"])){
    require_once("db.php");
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $position = $_POST["position"];
    $image = $_POST["image"];
    $query = "insert into employers(`name`,surname, birthday, gender, position, image) values('$name',' $surname','$birthday',' $gender','$position','$image')";
    $result = mysqli_query($conn,$query);
    if ($result){
    header("Location:read.php");
    }
}
?>
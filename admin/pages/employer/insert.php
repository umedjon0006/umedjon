<?php
if (isset($_POST['save']))
{
    $name = $_POST ["name"];
    $surname = $_POST["surname"];
    $birthday =$_POST["birthday"];
    $gender = $_POST["gender"];
    $position = $_POST["position"];
    

    require_once("../../../db.php");

    $targetDir = "../../../assets/images/employer/";
    $image = time().'.jpg';
    $targetFile = $targetDir . $image;
    echo $targetDir;
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    $sql = "INSERT INTO employers(`name`,surname,birthday,gender,position,`image`) 
    values('$name','$surname','$birthday','$gender','$position','$image');";
    $result =  mysqli_query($conn, $sql);
    if ($result){
       header("Location:../../index.php?page=2"); 
    }    
}
?>
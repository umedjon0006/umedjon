<?php
if (isset($_POST['save']))
{
    $name = $_POST ["name"];
    $description = $_POST["description"];
    $price =$_POST["price"];
    

    require_once("../../../db.php");

    $targetDir = "../../../assets/images/employer/";
    $image = time().'.jpg';
    $targetFile = $targetDir . $image;
    echo $targetDir;
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    $sql = "INSERT INTO dishes(`name`,`description`,price,`image`) 
    values('$name','$description','$price','$image');";
    $result =  mysqli_query($conn, $sql);
    if ($result){
       header("Location:list.php"); 
    }    
}
?>
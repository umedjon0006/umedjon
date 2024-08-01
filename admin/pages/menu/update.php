
<?php  
if (isset($_GET["id"]) && isset($_GET["page"]) 
&& $_GET["page"] = "4")
{
    $id = $_GET['id'];
    $name = $_POST["name"];
    $surname= $_POST["surname"];
    $birthday =$_POST["birthday"];
    $gender= $_POST["gender"];
    $position= $_POST["position"];
    $image=$_POST["image"];
    require_once("../db.php");
    
    $sql = "UPDATE employers 
    SET 
    'name'='$name',
    'surname'='$surname',
    'birthday'='$birthday',
    'gender'='$gender',
    'position'='$position',
    'image'='$image',
    where id =  $id";
    echo $sql;
    mysqli_query($conn, $sql);
}
?>
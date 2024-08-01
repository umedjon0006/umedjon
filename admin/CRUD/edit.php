<?php 
if (!isset($_GET["id"])){
    header("Location:read.php");
}
$id=$_GET["id"];
require_once("db.php");
$query = "Select * from employers where id= $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)<1){
    header(Location:"read.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container col-sm-6">
    <form action="update.php" method="post">
    Имя
    <input class="form-control" type="text" name="name" value="<?=$row['name']?>">
    Фамилия 
    <input class="form-control" type="text" name="surname" value="<?=$row['surname']?>">
    День рождение
    <input class="form-control" type="date" name="birthday"  value="<?=$row['birthday']?>">
    Пол Сотрудника
    <input class="form-control" type="text" name="gender" value="<?=$row['gender']?>" >
    Должность
    <input class="form-control" type="text" name="position"  value="<?=$row['position']?>">
    Фото Сотрудника
    <input class="form-control" type="text" name="image"  value="<?=$row['image']?>">
    <input type="hidden" name="id" value="<?=$id;?>">
    <input class="btn btn-danger" type="submit" value="Добавить" name="employers">
</form>
</div>
</body>
</html>
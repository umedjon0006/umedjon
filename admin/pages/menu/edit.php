<?php 
if (!isset($_GET["id"])){
    header("Location:list.php");
}
$id=$_GET["id"];
require_once("../db.php");
$query = "Select * from employers where id= $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)<1){
    header(Location:"list.php");
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
    <input class="form-control" type="text" name="surname"  value="<?=$row['surname']?>">
    День рождение
    <input class="form-control" type="date" name="birthday" value="<?=$row['birthday']?>" >
    Пол
    <input class="form-control" type="text" name="gender"  value="<?=$row['gender']?>">

                <label for="inputStatus">Должность</label>
                <select  name="position" class="form-control custom-select" value="<?=$row['position']?>">
                  <option>Шеф-повар</option>
                  <option>Бармен</option>
                  <option>Су-шеф</option>
                  <option>Администратор</option>
                  <option>Офитсант</option>
                  <option>Уборшица</option>
                  <option>Повар</option>
                  <option>Доставщик</option>
                  <option>Метрдотель(менеджер зала)</option>
                  <option>Хостес</option>
                  <option>Управляющый</option>
                  <option>Кассир</option>
                  <option>Бариста</option>
                  </select>
                

    Фото
    <input class="form-control" type="file" name="image"  value="<?=$row['image']?>"><br>
    <input type="hidden" name="id" value="<?=$id;?>">
   <a href="index.php?page=2">Добавить</a>
</form>
</div>
</body>
</html>







 


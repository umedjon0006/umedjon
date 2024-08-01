<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container col-sm-9">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>День рождение</th>
            <th>Пол</th>
            <th>Должность</th>
            <th>Фото Сотрудника</th>
            <th>Удаление</th>
            <th>Изминение</th>
         
        </tr>
    <?php 
    require_once("db.php");
    $i=0;
    $query = "Select * from employers";
    $result = mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result))
    {
        $i++
?>
<tr>
    <td><?=$i;?></td>
    <td><?=$row['name'];?></td>
    <td><?=$row['surname'];?></td>
    <td><?=$row['birthday'];?></td>
    <td><?=$row['gender'];?></td>
    <td><?=$row['position'];?></td>
    <td><?=$row['image'];?></td>
    <td><a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Удалить</a></td>
    <td><a class="btn btn-warning" href="edit.php?id=<?=$row['id'];?>">Изминить</a></td>
</tr>
<?php
    }
    ?>
    </table>
    <a class="btn btn-danger" href="index.php">Добавить</a>
</div>
</body>
</html>
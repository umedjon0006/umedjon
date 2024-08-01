<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Список Сотрудников</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
    <div class="container col-sm-12">
    <table class="table">
        
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>День рождение</th>
            <th>Пол</th>
            <th>Должность</th>
            <th>Фото</th>
            <th>Удаление</th>
            <th>Изминение</th>
         
        </tr>
    <?php 
   require_once("../db.php");
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
    <td><a class="btn btn-danger" href="?page=3&id=<?=$row['id'];?>">Удалить</a></td>
    <td><a class="btn btn-warning" href="?page=4&id=<?=$row['id'];?>">Изминить</a></td>
</tr>
<?php
    }
    ?>
    <?php 
    ?>
    </table>
    <a class="btn btn-danger" href="index.php?page=1">Добавить</a>
</div>



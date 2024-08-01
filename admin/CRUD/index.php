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
<h1>Добавление сотрудников</h1>
    <form action="create.php" method="post">
    Имя
    <input class="form-control" type="text" name="name">
    Фамилия 
    <input class="form-control" type="text" name="surname">
    День рождение
    <input class="form-control" type="date" name="birthday">
    Пол Сотрудника
    <input class="form-control" type="text" name="gender">
    Должность
    <input class="form-control" type="text" name="position">
    Фото Сотрудника
    <input class="form-control" type="text" name="image"><br>
    <input class="btn btn-danger" type="submit" value="Добавить" name="employers">
</form>
</div>
</body>
</html>
<form action="pages/employer/insert.php" method="Post" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Добавление Сотрудников</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName" name="name">Имя</label>
                <input type="text" name="name" id="inputName" class="form-control">
              </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                <label for="inputName" name="surname">Фамилия </label>
                <input type="text" name="surname" id="inputName" class="form-control">
              </div>
              </div>
              <div class="card-body" bis_skin_checked="1">
              <div class="form-group" bis_skin_checked="1">
                <label for="inputName" name="birthday">День рождение</label>
                <input type="date" name="birthday" id="inputName" class="form-control">
              </div>
              </div>
              <div class="form-group" bis_skin_checked="1">
                <div class="card-body" bis_skin_checked="1">
              <label  for="inputName" name="gender">Пол </label><br>
              <form>
              <input type="radio" id="male" name="gender" value="Мужчина">
              <label for="male">Мужчина</label><br>
              <input type="radio" id="female" name="gender" value="Женшина">
              <label for="female">Женщина</label><br>
              </form>
              </div>
              </div>

            <div class="form-group">
            <div class="card-body">
                <label for="inputStatus">Должность</label>
                <select  name="position" class="form-control custom-select">
                  <option selected="" disabled="">Выбери один</option>
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
                  </div>
</div>
                
             <div class="form-group">
              <label for="inputName">Файл</label>
              <input type="file" name="file" class="form-control">
</div>
            <input class="btn btn-primary" type="submit" value="Добавить" name="save">
            </div>
           
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    
      </div>
</form>
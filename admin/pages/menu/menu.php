<form action="pages/menu/insert.php" method="Post" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Добавление Меню</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName" name="name">Имя блюдо</label>
                <input type="text" name="name" id="inputName" class="form-control">
              </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                <label for="inputName" name="description">Коментарий </label>
                <input type="text" name="description" id="inputName" class="form-control">
              </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                <label for="inputName" name="price">Цена</label>
                <input type="decimal" name="price" id="inputName" class="form-control">
              </div>
              </div>
              
                <div class="card-body">
             <div class="form-group">
              <label for="inputName">Фото блюдо</label>
              <input type="file" name="file" class="form-control">
</div>
</div>
            <input class="btn btn-info" type="submit" value="Добавить" name="save">
            </div>
           
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    
      </div>
</form>
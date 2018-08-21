<?php





require_once "templates/header.php"
?>

      <main >
        <div class="container">
          <div class="tasks__main">
              <div class="row justify-content-md-center">
                  
                  <div class="col-7 ">
                        <form class="tasks__main">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><h4>Статус:</h4></label>
                        
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>В работе</option>
                                    <option>Выполнено</option>
                                    <option>Ожидает</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><h4>Создатель заявки:</h4></label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>Коновалов Александр</option>
                                <option>Кичигин Роман</option>
                                <option>Наумова Анна</option>
                                <option>Николаюк Екатерина</option>
                                <option>Смирнова Любовь</option>
                                </select>
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><h4>Описание задания:</h4></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Создать задачу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
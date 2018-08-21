<?php





require_once "templates/header.php"
?>

      <main >
        <div class="container">
          <div class="tasks__main">
              <div class="row justify-content-md-center">
                  
                  <div class="col-8 ">
                        <form class="needs-validation tasks__main" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01"><h4>Время суток</h4></label>
                                    <select class="form-control" id="validationCustom01">
                                            <option>День</option>
                                            <option>Ночь</option>
                                            
                                    </select>
                                </div>
                                <div class="col-md-8 mb-3">
                                        
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"><h4>Создатель Отчета:</h4></label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Коновалов Александр</option>
                                        <option>Кичигин Роман</option>
                                        <option>Наумова Анна</option>
                                        <option>Николаюк Екатерина</option>
                                        <option>Смирнова Любовь</option>
                                        </select>
                                            
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <textarea class="form-control"  rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <a type="button" class="btn btn-success addReport" href="report.php">
                                        <svg id="i-reply" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M10 6 L3 14 10 22 M3 14 L18 14 C26 14 30 18 30 26" />
                                        </svg> Назад
                                    </a>
                                </div>
                                <div class="col-md-6 mb-3">
                                        <a type="button" class="btn btn-success addReport" href="#">
                                            <svg id="i-clipboard" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M12 2 L12 6 20 6 20 2 12 2 Z M11 4 L6 4 6 30 26 30 26 4 21 4" />
                                            </svg> Создать
                                        </a>
                                    </div>
                            </div>
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
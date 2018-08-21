<?php






require_once "templates/header.php"
?>

      <main >
        <div class="container">
            <div>
                    <form>
                        <div class="row justify-content-center sett__main">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Логин">
                                Логин
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Пароль">
                                Пароль
                            </div>
                            <div class="col">
                                    <input type="date" class="form-control" placeholder="День Рождения">
                                    День Рождения
                             </div>
                        </div>
                        <div class="row justify-content-center sett__main">
                            <div class="col">
                                <a type="button" class="btn btn-success addReport" href="profile.php">
                                        <svg id="i-checkmark" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M2 20 L12 28 30 4" />
                                        </svg> Сохранить
                                    </a>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger addReport" href="profile.php">
                                        <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M2 30 L30 2 M30 30 L2 2" />
                                        </svg> Отмена
                                    </a>
                            </div>
                        </div>
                    </form>
            </div>
            
        </div>
      </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
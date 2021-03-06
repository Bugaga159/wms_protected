<?php

//Подключение файла запросов
require_once "databases/QueryBuilder.php"; 

//Содание экземпляра класса запросов QueryBuilder
$db = new QueryBuilder;

// Выбираем все из БД таблицы `tasks`, выводит ---- id, status, responsible, data, text, creator
$tasks = $db->all('tasks');




require_once "templates/header.php"

?>

      <main >
        <div class="container">
          <div class="tasks__main">
              <div class="row">
                  <div class="col-3">
                      <div class="btn-group-vertical group__vertical__tasks">
                          <button type="button" class="btn btn-secondary">Все задачи</button>
                          <button type="button" class="btn btn-secondary">Необходимо выполнить<span class="badge badge-light">4</span></button>
                          <button type="button" class="btn btn-secondary">Выполненые задачи</button>
                          <a type="button" class="btn btn-success" href="addTask.php">
                              <svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L16 30 M2 16 L30 16" />
                            </svg> Добавить задачу</a>
                      </div>
                  </div>
                  <div class="col-9">

                      <table class="table table-striped table-dark tasks__align">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Задача</th>
                              <th scope="col">Статус</th>
                              <th scope="col">Ответственный</th>
                              <th scope="col">Дата</th>
                              <th scope="col">Действия</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php //Цикл выводв данных из БД таблицы `tasks`

                                foreach ($tasks as $task):?>
                            <tr>
                                <th scope="row"><?=$task['id'];?></th>
                                <td><?=$task['text'];?></td>
                                <?php if($task['status'] == '1'){
                                  echo '<td class="done__tasks">Выполнено</td>';
                                }elseif ($task['status'] == '2') {
                                  echo '<td class="work__tasks">В работе</td>';
                                }else {
                                    echo '<td class="work__tasks">Ожидает</td>';
                                  } ?>
                                <td>
                                  <?php $name = $db->getOne('users', $task['responsible']);
                                      echo $name['lastname']. ' '. $name['firstname'];
                                 ?></td>
                                <td><?=$task['data'];?></td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <circle cx="17" cy="15" r="1" />
                                                <circle cx="16" cy="16" r="6" />
                                                <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                        </svg>
                                    </button>

                                    <button type="button" class="btn btn-danger">
                                        <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M2 30 L30 2 M30 30 L2 2" />
                                        </svg>
                                    </button>
                                </td>
                              </tr>

                            <?php endforeach; ?>

                          </tbody>
                        </table>
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

<?php





require_once "templates/header.php"
?>

      <main >
        <div class="container">
          <div class="tasks__main">
              <div class="row">
                  
                  <div class="col-12">
                    
                        <a type="button" class="btn btn-success btn__report__add" href="addReport.php">
                            <svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L16 30 M2 16 L30 16" />
                            </svg> Добавить отчет</a>
                        
                    
                      <table class="table table-striped table-dark tasks__align">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Дата</th>
                              <th scope="col">Смена</th>
                              <th scope="col">Отчет за смену</th>
                              <th scope="col">Ответственный</th>
                              <th scope="col">Действие</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                                <th scope="row">1</th>
                                <td>18/07/18г</td>
                                <td>День</td>
                                <td>В работе макло ТСД, нужно увеличить количество</td>
                                <td>Наумова Анна</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">
                                            <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="17" cy="15" r="1" />
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2" />
                                            </svg>
                                        </button>
                                                
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>17/07/18г</td>
                                <td>Ночь</td>
                                <td>приёмку 005876-приёмку удалили акт на неё.
                                        на новом складе заблокировали 35 паллет кег так как они с осадком код ЕНС 20255.
                                        в ночь на новом складе надо переместить из 24 ряда ПЭТ 1.0л и сделать под ПЭТ 1.5л так как паллеты с Пэт 1.0л слишком большие и выпирают за края</td>
                                <td>Наумова Анна</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">
                                            <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="17" cy="15" r="1" />
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2" />
                                            </svg>
                                        </button>
                                                
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>16/07/18г</td>
                                <td>День</td>
                                <td>прописан под пиво 34 ряд
                                        2 уровень от 20-66 яч
                                        3-6 уровни 7-66 яч.
                                        То пиво которое не расчитывалось .Разместили в консервы и соки/воды.Распоряжение Фильцагина.</td>
                                <td>Наумова Анна</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">
                                            <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="17" cy="15" r="1" />
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2" />
                                            </svg>
                                        </button>
                                                
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>15/07/18г</td>
                                <td>Ночь</td>
                                <td>блок А04.34.10 по А04.34.24 там поставили бумагу А4!</td>
                                <td>Наумова Анна</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">
                                            <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="17" cy="15" r="1" />
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2" />
                                            </svg>
                                        </button>
                                                
                                    </div>
                                </td>
                            </tr>
                            <tr>
                             <th scope="row">5</th>
                                <td>15/07/18г</td>
                                <td>День</td>
                                <td>блок А04.34.10 по А04.34.24 там поставили бумагу А4!
                                        БЛОК снят- убрала категорию</td>
                                <td>Наумова Анна</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">
                                            <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="17" cy="15" r="1" />
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <svg id="i-close" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2" />
                                            </svg>
                                        </button>
                                                
                                    </div>
                                </td>
                            </tr>
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
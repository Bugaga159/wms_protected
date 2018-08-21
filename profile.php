<?php

require_once "databases/QueryBuilder.php";

$db = new QueryBuilder;

$id = $_GET['id'];

$user = $db->getOne("users", $id);



require_once "templates/header.php"
?>



         <main >
            <div class="container ">
                 <div class="row"> 
                    <div class="col-12">
                        <h2>Добро пожаловать <?php echo $user["lastname"]." ".$user['firstname']?>!</h2>

                    </div>
                </div>
                <div class="row ">
                    <div class="col-3">
                        <img src="img/anon.jpg" alt="Панин" class="img-thumbnail">
                        <p><a type="button" class="btn btn-success addReport" href="sett.php">
                                <svg id="i-settings" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                        <circle cx="16" cy="16" r="4" />
                                    </svg> Редактировать профиль
                            </a></p>
                    </div>
                    <div class="col-9">
                
                        <h4 class="profile__table">Ваш график работы на Август:</h4>

                        <table border="1" class="profile__table">
                                <tr>
                                    <td>Сотрудник</td>
                                    <td class="weekend">01</td>
                                    <td>02</td>
                                    <td>03</td>
                                    <td>04</td>
                                    <td>05</td>
                                    <td>06</td>
                                    <td class="weekend">07</td>
                                    <td class="weekend">08</td>
                                    <td>09</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td class="weekend">14</td>
                                    <td class="weekend">15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td class="weekend">21</td>
                                    <td class="weekend">22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td class="weekend">28</td>
                                    <td class="weekend">29</td>
                                    <td>30</td>
                                    <td>31</td>
        
                                </tr>
                                <tr>
                                        <td class="person">Панин Андрей</td>
                                        <td class="weekend">д</td>
                                        <td>н</td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td>д</td>
                                        <td>н</td>
                                        <td class="weekend">  </td>
                                        <td class="weekend">  </td>
                                        <td>д</td>
                                        <td>н</td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td>д</td>
                                        <td class="weekend">н</td>
                                        <td class="weekend">  </td>
                                        <td>  </td>
                                        <td>д</td>
                                        <td>н</td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td class="weekend">д</td>
                                        <td class="weekend">н</td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td>д</td>
                                        <td>н</td>
                                        <td>  </td>
                                        <td class="weekend">  </td>
                                        <td class="weekend">д</td>
                                        <td>н</td>
                                        <td>  </td>
                                </tr>
                         </table>
                         <hr>
                         <p>
                            <button type="button" class="btn btn-success">Количество дней доп. выходов - <span class="badge badge-light">3</span></button>
                            <button type="button" class="btn btn-danger">Количество дней отпуска за свой счет - <span class="badge badge-light">0</span></button>
                            
                         </p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6">
                        <a type="button" class="btn btn-success addReport" href="sett.html">
                            <svg id="i-mail" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6" />
                            </svg> Мои сообщения <span class="badge badge-light">3</span>
                         </a>
                    </div>
                    <div class="col-6">
                        <a type="button" class="btn btn-success addReport" href="sett.html">
                            <svg id="i-msg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M2 4 L30 4 30 22 16 22 8 29 8 22 2 22 Z" />
                                </svg>   Написать сообщение сотруднику
                        </a>
                     </div>
                </div>
            </div>
         </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
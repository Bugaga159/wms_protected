<?php


class Auth
{
    public $db;

    public function __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }

    public function register($login, $password)
    {
        $this->db->store('users', [
            'login'  =>  $login,
            'password'   =>  md5($password)
        ]);
    }

    public function login($login, $password)
    {
        //  1. Проверить существует ли пользователь в базе
        $sql = "SELECT * FROM users WHERE login=:login AND password=:password LIMIT 1";
        $statement = $this->db->pdo->prepare($sql);
        $statement->bindParam(":login", $login);
        $statement->bindParam(":password", md5($password));
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        //  2. Если да
        //      2.1. Записываем в сессию и возвращаем true
        if($user) {
            $_SESSION['user'] = $user;
            return true;
        }
        //  3. Если нет
        //      3.1. Возвращаем false
        return false;
    }


    public function logout()
    {
        unset($_SESSION['user']);
    }

    public function check()
    {
        if(isset($_SESSION['user'])) {
            return true;
        }

        return false;
    }

    public function currentUser()
    {
        if($this->check()) {
            return $_SESSION['user'];
        }
    }

    public function fullName()
    {
        $user = $this->currentUser();

        return $user['firstname'] . " " . $user['lastname'];
    }
}
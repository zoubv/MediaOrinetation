<?php
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function register($username, $email, $password) {
        if ($this->model->registerUser($username, $email, $password)) {
            header('Location: index.php?page=login&success=1');
        } else {
            header('Location: index.php?page=register&error=1');
        }
    }

    public function login($email, $password) {
        $user = $this->model->loginUser($email, $password);
        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: index.php?page=dashboard');
        } else {
            header('Location: index.php?page=login&error=1');
        }
    }
}

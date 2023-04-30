<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function signin()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('signin');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $userRepository->getUser($email);

        if(!$user) {
            return $this->render('signin', ['messages' => ['User with this email does not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('signin', ['messages' => ['User with this email does not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('signin', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/index");
    }
}

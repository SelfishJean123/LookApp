<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

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

        if (!$user) {
            return $this->render('signin', ['messages' => ['User with this email does not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('signin', ['messages' => ['User with this email does not exist!']]);
        }

        if ($user->getPassword() !== md5($password)) {
            return $this->render('signin', ['messages' => ['Wrong password!']]);
        }

        session_start();
        $_SESSION['ROLE'] = $user->getRole();
        $_SESSION['NAME'] = $user->getName();

        header("Location:products");
        die();
    }

    public function signup()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $mobile = $_POST['mobile'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];

        if ($password !== $confirmedPassword) {
            return $this->render('signup', ['messages' => ['You have provided two different passwords!']]);
        }

        // TODO try to use better hash function
        $user = new User($name, $surname, $mobile, $role, $email, md5($password));

        $user->setName($name);
        $user->setSurname($surname);
        $user->setMobile($mobile);
        $user->setRole($role);
        
        $userRepository->addUser($user);

        return $this->render('signin', ['messages' => ['You have been succesfully signed up!']]);
    }

    public function signout()
    {
        session_start();
        session_unset();
        session_destroy();

        header("Location:signin");
        die();
    }
}
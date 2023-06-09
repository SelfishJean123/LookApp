<?php

require_once 'AppController.php';

class DefaultController extends AppController
{
    public function index()
    {
        $this->render('home');
    }

    public function signin()
    {
        $this->render('signin');
    }

    public function signup()
    {
        $this->render('signup');
    }

    public function signout()
    {
        $this->render('signout');
    }

    public function contact()
    {
        $this->render('contact');
    }

    public function about()
    {
        $this->render('about');
    }
}
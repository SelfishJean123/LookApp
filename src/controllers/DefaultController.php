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

    public function encyclopedia()
    {
        $this->render('encyclopedia');
    }

    public function products()
    {
        $this->render('products');
    }

    public function about()
    {
        $this->render('about');
    }
}
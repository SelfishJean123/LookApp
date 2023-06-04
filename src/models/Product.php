<?php

class Product
{
    private $id;
    private $brand;
    private $name;
    private $ingredients;
    private $file;
    private $favourites;

    public function __construct($id = null, $brand, $name, $ingredients, $file, $favourites = 0)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->file = $file;
        $this->favourites = $favourites;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFavourites()
    {
        return $this->favourites;
    }

    public function setFavourites($favourites)
    {
        $this->favourites = $favourites;
    }
}
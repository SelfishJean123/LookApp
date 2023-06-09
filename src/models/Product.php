<?php

class Product
{
    private $name;
    private $ingredients;
    private $brand;
    private $file;
    private $favourites;
    private $id;

    public function __construct($name, $ingredients, $brand, $file, $favourites = 0, $id = null)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->brand = $brand;
        $this->file = $file;
        $this->favourites = $favourites;
        $this->id = $id;
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
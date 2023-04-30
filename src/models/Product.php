<?php

class Product
{
    private $brand;
    private $name;
    private $ingredients;
    private $file;

    public function __construct($brand, $name, $ingredients, $file)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->file = $file;
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
}
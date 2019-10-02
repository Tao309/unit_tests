<?php

class Product {
    private $title = 'Яблоки';
    private $price = 200;
    private $category = 'Фрукты';

    public function __construct(string $title = null, int $price = null, string $category = null)
    {
        if($title)
        {
            $this->title = $title;
        }

        if($price)
        {
            $this->price = $price;
        }

        if($category)
        {
            $this->category = $category;
        }
    }

    public function getTitle():string
    {
        return $this->title;
    }
    public function getPrice():int
    {
        return $this->price;
    }
    public function getCategory():string
    {
        return $this->category;
    }

    public function setTitle(string $value)
    {
        $this->title = $value;
    }
    public function setPrice(int $value)
    {
        $this->price = $value;
    }
    public function setCategory(string $value)
    {
        $this->category = $value;
    }
    public function getAttributes()
    {
        return [
            $this->getTitle(),
            $this->getPrice(),
            $this->getCategory(),
        ];
    }
}
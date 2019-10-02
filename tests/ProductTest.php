<?php

require_once('../vendor/autoload.php');
require_once('../source/product.php');

class ProductTest extends PHPUnit\Framework\TestCase {
    public function testManualSetTitle()
    {
        $product = new Product();
        $title = 'Мандарины';
        $product->title = $title;

        $this->assertEquals($title, $product->getTitle());
    }
    public function testMethodSetTitle()
    {
        $product = new Product();
        $title = 'Мандарины';
        $product->setTitle($title);

        $this->assertEquals($title, $product->getTitle());
    }

    /**
     * @depends testMethodSetTitle
     */
    public function testCreateProduct()
    {
        $title = 'Помидоры';
        $category = 'Овощи';
        $product = new Product($title, 140, $category);

        $this->assertEquals($title, $product->getTitle());
        $this->assertEquals($category, $product->getCategory());
    }

    /**
     * @dataProvider productsListProvider
     */
    public function testManyCreating($title, $price, $category)
    {
        $product = new Product($title, $price, $category);
        $this->assertEmpty($product->getAttributes());

    }
    public function productsListProvider()
    {
        return [
            ['Монитор', 12000, 'Техника'],
            ['Телефон', 23000, 'Сотовая связь'],
            ['Хлеб', 120, 'Хлебобулочное изделие'],
            ['Зубная паста', 250, 'Косметика/гигиена'],
        ];
    }

}
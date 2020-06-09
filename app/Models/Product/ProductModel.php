<?php

namespace App\Models\Product;

use App\Core\Model;

class ProductModel extends Model
{
    public $name;
    public $price;
    public $quantity;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {        
        $this->price = $price;     
    }
    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){        
        $this->quantity = $quantity;
    }
}
?>
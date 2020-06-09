<?php
namespace App\Models\Product;

use App\Models\Product\ProductModel;
use App\Core\ResourceModel;

class ProductResourceModel extends ResourceModel {

    private $resourceModel;
    public function __construct()
    {
        $product = new ProductModel();
        $this->_init('products', 'id', $product);
    }
}
?>
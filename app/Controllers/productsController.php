<?php

namespace App\Controllers;

require "../vendor/autoload.php";

use App\Core\Controller;
use App\Models\Product\ProductRepository;

class productsController extends Controller
{
    private $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    function index()
    {
        $product = $this->productRepository->getAllProduct();
        $d['products'] = $product;
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            if ($this->productRepository->addProduct($_POST))
            {
                header("Location: " . WEBROOT . "products/index");
            }
        }

        $this->render("create"); 
    }

    function edit($id)
    {

        $d["product"] = $this->productRepository->showProduct($id);

        if (isset($_POST["name"]))
        {
            if ($this->productRepository->updateProduct($id, $_POST))
            {
                header("Location: " . WEBROOT . "products/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {

        if ($this->productRepository->deleteProduct($id))
        {
            header("Location: " . WEBROOT . "products/index");
        }
    }
}
?>
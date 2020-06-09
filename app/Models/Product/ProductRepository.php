<?php
    namespace App\Models\Product;

    use App\Models\Product\ProductResourceModel;

    class ProductRepository {

        private $resourceModel;

        public function __construct()
        {
            $this->resourceModel = new ProductResourceModel();
        }

        public function getAllProduct() {
            return $this->resourceModel->showAll();
        }

        public function addProduct($model) {
            return $this->resourceModel->add($model);
        }

        public function showProduct($id) {
            return $this->resourceModel->show($id);
        }

        public function updateProduct($id, $model) {
            return $this->resourceModel->edit($id, $model);
        }

        public function deleteProduct($id) {
            return $this->resourceModel->delete($id);
        }
    }
?>
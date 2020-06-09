<?php
    namespace App\Models\Task;

    use App\Models\Task\TaskResourceModel;

    class TaskRepository {

        private $resourceModel;

        public function __construct()
        {
            $this->resourceModel = new TaskResourceModel();
        }

        public function getAllTask() {
            return $this->resourceModel->showAll();
        }

        public function addTask($model) {
            return $this->resourceModel->add($model);
        }

        public function showTask($id) {
            return $this->resourceModel->show($id);
        }

        public function updateTask($id, $model) {
            return $this->resourceModel->edit($id, $model);
        }

        public function deleteTask($id) {
            return $this->resourceModel->delete($id);
        }
    }
?>
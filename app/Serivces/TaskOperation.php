<?php
namespace App\Services;
use App\Repositories\ConsumerInterface;
use App\Repositories\TaskOperationInterface;

class TaskOperation implements TaskOperationInterface {
    public function create( array $data) {
        // implementation
    }

    public function update(int $id, array $data) {
        // implementation
    }

    public function delete(int $id) {
        // call task repository delete method
    }

    public function find(int $id) {
        // call task repository find method
    }

    public function all() {
        // call task repository all method
        
    }
}

?>
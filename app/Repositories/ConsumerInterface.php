<?php
namespace App\Repositories;

interface ProducerInterface {
    public function produce(string $message);
}

?>
<?php

use App\Repositories\ConsumerInterface;
use App\Repositories\ProducerInterface;

class MessagingContext {
    private $producer;
    private $consumer;

    public function __construct(ProducerInterface $producer, ConsumerInterface $consumer) {
        $this->producer = $producer;
        $this->consumer = $consumer;
    }

    public function sendMessage(string $message) {
        $this->producer->produce($message);
    }

    public function receiveMessage() {
        return $this->consumer->consume();
    }
}

?>

/*
// In your controller or service provider
$redisProducer = new RedisProducer();
$rabbitMQProducer = new RabbitMQProducer();
$kafkaProducer = new KafkaProducer();

$redisConsumer = new RedisConsumer();
$rabbitMQConsumer = new RabbitMQConsumer();
$kafkaConsumer = new KafkaConsumer();

// Example usage with Redis
$context = new MessagingContext($redisProducer, $redisConsumer);
$context->sendMessage("Hello Redis!");
$message = $context->receiveMessage();

*/
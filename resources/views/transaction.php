<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$url = '127.0.0.1:8000/api/store';

// Connection setup
$connection = new AMQPStreamConnection('172.16.14.127', 15672, 'guest', 'guest');
$channel = $connection->channel();

// Declare a direct exchange
$exchange = 'transaction_exchange';
$queue = 'transaction';
$routingKey = 'transaction';

$channel->exchange_declare($exchange, 'direct', false, true, false);

// Declare and bind queue to the exchange with routing key
$channel->queue_declare($queue, false, true, false, false);
$channel->queue_bind($queue, $exchange, $routingKey);

// JSON payload
$data = [
    'aadhar_ref_id' => 123,
    'aadhar' => 456,
    'aadhar_eid' => 789,
    'event_type_id' => 1,
    'sub_event_type_id' => 1,
    'event_transaction_id' => 1,
    'event_transaction_date' => '2025-05-17',
    'agency_id' => 1,
    'agency_name' => 'crs',
    'rural_urban' => 'rural',
    'district_code' => 147,
    'sub_district' => 258,
    'corp_muni_town' => 'sarkhej',
    'ward_village' => 'sarkhej',
    'event_date' => '2025-05-17',
];

$jsonData = json_encode($data);

// Publish message
$msg = new AMQPMessage($jsonData, ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]);
$channel->basic_publish($msg, $exchange, $routingKey);

// echo " [x] Sent JSON to direct exchange '$exchange' with routing key '$routingKey'\n";

// Close connection
$channel->close();
$connection->close();

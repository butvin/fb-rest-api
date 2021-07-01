<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require __DIR__ . '/src/app/App.php';


$fb = new Facebook\Facebook(
    [
        'app_id' => '{app-id}',
        'app_secret' => '{app-secret}',
        'default_graph_version' => 'v2.10',
    ]
);

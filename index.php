<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require __DIR__ . '/src/app/App.php';





//use FacebookAds\Api;
//use FacebookAds\Object\AdAccount;
//use FacebookAds\Object\Fields\AdSetFields;
//
//
//$app_id = getenv('APP_ID');
//$app_secret = getenv('APP_SECRET');
//$access_token = getenv('ACCESS_TOKEN');
//
//
//// Initialize a new Session and instantiate an Api object
//Api::init($app_id, $app_secret, $access_token);
//
//// The Api object is now available through singleton
//$api = Api::instance();

